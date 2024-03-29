<?php
/**
 *Created by bargylus.
 *FILE_NAME:controler.php
 *USER:marwa
 *DATE:14.05.2020
 */

require 'model/model.php';
require 'controler/mail.php';
function home()
{
    getWinesSolds();


    require_once 'view/home.php';
}


function basketPage($basketContentPost)
{
    //pour chaque vin dans la session augemente le prix du total dans une session
    $_SESSION['total'] = 0;
    foreach ($basketContentPost as $oneBasketContentPost) {
        $_SESSION['total'] += $oneBasketContentPost['priceTotalOneWine'];
    }

    $users = getUsers();
    require_once 'view/basket.php';
}

function profilPage($id)
{
    $user = getUserById($id);
    require_once 'view/profil.php';
}

function editProfil($id){
    $user = getUserById($id);
    require 'view/profil_edit.php';
}

function profilElementEdition($id,$firstname,$lastname,$number,$street,$zip,$city,$day,$month,$year){

    if($firstname != NULL){
        updateElementFirstname($id, $firstname);
    }
    if($lastname != NULL){
        updateElementLastname($id, $lastname);
    }
    if($number != NULL){
        updateElementNumber($id, $number);
    }
    if($street != NULL){
        updateElementStreet($id, $street);
    }
    if($zip != NULL){
        updateElementZip($id, $zip);
    }
    if($city != NULL){
        updateElementCity($id, $city);
    }
    if($day != NULL){
        $today = date('Y-m-d');
        $date_of_birth = strtotime("$year-$month-$day");
        $todayYear = date("Y");
        $Age = $todayYear - $year;
        $todayMinusAge = strtotime("$today -$Age year");
        if($todayMinusAge < $date_of_birth){
            $Age = $Age - 1;
        }

        if($Age >= 16){
            $birthdate = $year . '-' . $month . '-' . $day;
            updateElementBirthdate($id, $birthdate);
            $_SESSION['flashmessage']= "vous avez mis à jour le profil";
        } else{
            $_SESSION['flashmessage']= "vous n'avez pas 16 ans";
        }

    }
    if($day == NULL){
        $_SESSION['flashmessage']= "vous avez mis à jour le profil";
    }

    editProfil($id);
}

function deliveriesPage($id)
{
    $user = getUserById($id);
    $deliveries = getDeliveriesByUserId($id);
    require_once 'view/deliveries.php';
}

function invoicesPage($id)
{
    $user = getUserById($id);
    $invoices = getInvoicesByUserId($id);
    require_once 'view/invoices.php';
}

function payPage($deliverySelected, $id, $invoiceSelected)
{

    $user = getUserById($id);
    if (isset($deliverySelected)) {
        $lastOrderDelivery = getDeliveryById($deliverySelected);
    } else {

            $lastOrderDelivery = getLastDeliveryByUserId($id);
            if($lastOrderDelivery == NULL){
                $lastOrderDelivery =     getDelivery($id);
            }
    }
    if (isset($invoiceSelected)) {
        $lastOrderInvoice =    getInvoiceById($invoiceSelected);

    }else{
        $lastOrderInvoice = getLastInvoiceByUserId($id);
        if($lastOrderInvoice == NULL){
            $lastOrderInvoice = getInvoice($id);
        }
    }

    require_once 'view/pay.php';
}

function aboutPage()
{

    require_once 'view/about.php';
}

function contactPage()
{

    require_once 'view/contact.php';
}

function LoginPage()
{
    require_once 'view/login.php';
}

function pageAdmin()
{

    $states = getStates();
    $orders = getOrders();

    $options = array();

    foreach ($orders as $i => $order) {

        if ($orders[$i]['number'] != $orders[$i - 1]['number']) {

            foreach ($states as $ii => $state) {

                if ($states[$ii]['id'] != $orders[$i]['state_id']) {


                    $options[$i][$ii] = "<option value='" . $state['id'] . "'>" . $state['state_name'] . "</option> ";
                } else {

                    $options[$i][$ii] = "<option value='" . $state['id'] . "' selected >" . $state['state_name'] . "</option> ";
                }

            }

        }

    }

    require_once 'view/admin.php';
}

function tryLogin($emailPost, $passwordPost)
{
 $emailPost =   strtolower($emailPost);
    $user = getUserByEmail($emailPost);
    if ($emailPost == $user['email']) {


        if (password_verify($passwordPost, $user['password'])) {
            unset($user['password']);
            $_SESSION['user'] = $user;
            $_SESSION['flashmessage'] = 'Bienvenue ' . $user['firstname'] . " " . $user['lastname'];


            if ($user['droits'] == 1) {
                if (isset($_SESSION['ProceedToPayment'])) {
                    basketPage($_SESSION['basket']);
                } else {
                    pageAdmin();
                }
            } else if (isset($_SESSION['ProceedToPayment'])) {
                basketPage($_SESSION['basket']);
            } else {
                getWinesDisplay();
            }
        } else {
            unset($_SESSION['user']);
            $_SESSION['flashmessage'] = 'email ou password erroné';
            LoginPage();
        }
    }else{
        unset($_SESSION['user']);
        $_SESSION['flashmessage'] = 'email ou password erroné';
        LoginPage();
    }
}

function logout()
{
    unset($_SESSION['user']);
    unset($_SESSION['basket']);
    unset($_SESSION['ProceedToPayment']);
    unset($_SESSION['totalQuantity']);
    require_once 'view/home.php';
}


function signupPage()
{
    require_once 'view/signup.php';
}

function signup($email, $lastname, $firstname, $phoneNumber, $day, $month, $year, $streetHome, $zip, $city, $canton, $password,$admin)
{
    $email =   strtolower($email);
    if($admin == NULL){
        $admin = 0;
    }else{
        $admin = 1;
    }
    $userOne = [
        'email' => $email,
        'lastname' => $lastname,
        'firstname' => $firstname,
        'phone_number' => $phoneNumber,
        'year' => $year,
        'month' => $month,
        'day' => $day,
        'street_home' => $streetHome,
        'zip' => $zip,
        'city' => $city,
        'canton' => $canton,
        'password' => $password,
        'droits' => $admin
    ];
    $user = getUserByEmail($email);
    if ($email == $user['email']) {
        unset($_SESSION['user']);
        $_SESSION['flashmessage'] = 'l\'email est déjà utilisé  ';
        signupPage();
        return;
    } else {
        if (!stristr($email, '@')) {
            unset($_SESSION['user']);
            $_SESSION['flashmessage'] = "l'email n'est pas inscrit correctement @ obligatoire ";
            signupPage();
            return;
        }

        if ($year == date('Y') - 16) {
            if ($month > date('m')) {
                unset($_SESSION['user']);
                $_SESSION['flashmessage'] = 'vous n\'avez toujours pas l\'age pour acheter du vin  ';
                signupPage();
                return;
            }
            if ($month == date('m')) {
                if ($day > date('d')) {
                    unset($_SESSION['user']);
                    $_SESSION['flashmessage'] = 'vous n\'avez toujours pas l\'age pour acheter du vin  ';
                    signupPage();
                    return;
                }

            }

        }
        $_SESSION['flashmessage'] = 'Bienvenu!!! vous êtes connectés';

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $oneUser = [
        'email' => $email,
        'lastname' => $lastname,
        'firstname' => $firstname,
        'phone_number' => $phoneNumber,
        'registration_date' => date('Y-m-d'),
        'birth_date' => $year . '-' . $month . '-' . $day,
        'street_home' => $streetHome,
        'zip' => $zip,
        'city' => $city,
        'canton' => $canton,
        'password' => $hash,
        'droits' => $admin
    ];


 $id =   createUser($oneUser);

        $invoice = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'street' => $streetHome,
            'zip' => $zip,
            'city' => $city,
            'user_id'=>$id
        ];
        addInvoiceModel($invoice);
        addDeliveryModel($invoice);

    tryLogin($email, $password);
    }
}

//(Altin) Fonction qui ajoute un vin dans la session
// et supprime une bouteille dans la base de données
function addWinesBasket($idWinePost, $quantity)
{
    unset($_SESSION['ProceedToPayment']);
    if ($quantity == null) {
        $quantity = 1;
    }

    $wines = $_SESSION['basket'];
    foreach ($wines as $i => $wine) {
        if ($wine['id'] == $idWinePost) {
            $_SESSION['basket'][$i]['quantity'] += $quantity;

            $_SESSION['basket'][$i]['priceTotalOneWine'] = $_SESSION['basket'][$i]['quantity'] * $_SESSION['basket'][$i]['priceWithSold'];
            $_SESSION['totalQuantity'] += $quantity;


            $_SESSION['flashmessage'] = 'Vin ajouté dans le panier';
            withdrawWineBottle($idWinePost, $quantity);
            getWinesDisplay();
            return 0;
        }
    }


    $oneWine['totalQuantity'] = 0;
    $oneWine = getWineBottle($idWinePost);
    $oneWine['priceWithSold'] = $oneWine['basic_price'] - ($oneWine['basic_price'] * $oneWine['percentage'] / 100);
    $oneWine['priceTotalOneWine'] = $quantity * $oneWine['priceWithSold'];
    $oneWine['quantity'] = $quantity;
    $_SESSION['basket'][] = $oneWine;
    $_SESSION['totalQuantity'] = 0;
    $wines = $_SESSION['basket'];
    foreach ($wines as $wine) {
        $_SESSION['totalQuantity'] += $wine['quantity'];
    }

    $_SESSION['flashmessage'] = 'Vin ajouté dans le panier';
    withdrawWineBottle($idWinePost, $quantity);
    getWinesDisplay();

}

//Supprime un vin du Basket et update dans la base de donnée en ajoutant un vin dans le stock
function removeWinesBasket($idWinePost)
{
    unset($_SESSION['ProceedToPayment']);
    foreach ($_SESSION['basket'] as $i => $oneContent) {
        if ($oneContent['id'] == $idWinePost) {
            $quantity = $oneContent['quantity'];
            $_SESSION['totalQuantity'] -= $oneContent['quantity'];
            unset($_SESSION['basket'][$i]);

        }
    }
    if ($_SESSION['totalQuantity'] == 0) {
        unset($_SESSION['totalQuantity']);
    }
    addWineBottle($idWinePost, $quantity);
    basketPage($_SESSION['basket']);
}

function updateBasket($quantityPost)
{

    foreach ($_SESSION['basket'] as $i => $toto) {
        if ($_SESSION['basket'][$i]['quantity'] < $quantityPost[$i]) {
            $quantity = $quantityPost[$i] - $_SESSION['basket'][$i]['quantity'];
            withdrawWineBottle($_SESSION['basket'][$i]['id'], $quantity);
            $_SESSION['totalQuantity'] += $quantity;
        }
        if ($_SESSION['basket'][$i]['quantity'] > $quantityPost[$i]) {
            $quantity = $_SESSION['basket'][$i]['quantity'] - $quantityPost[$i];
            addWineBottle($_SESSION['basket'][$i]['id'], $quantity);
            $_SESSION['totalQuantity'] -= $quantity;
        }
        if ($_SESSION['basket'][$i]['quantity'] != $quantityPost[$i]) {
            unset($_SESSION['ProceedToPayment']);
        }

        $_SESSION['basket'][$i]['priceTotalOneWine'] = $quantityPost[$i] * $_SESSION['basket'][$i]['priceWithSold'];
        if ($quantityPost[$i] > 0) {
            $_SESSION['basket'][$i]['quantity'] = $quantityPost[$i];
        } else {
            unset($_SESSION['basket'][$i]);
        }

    }
    basketPage($_SESSION['basket']);

}


function proceedToPayment($id)
{
    $_SESSION['ProceedToPayment'] = true;
    if (isset($_SESSION['user'])) {


        $lastOrder = getLastDeliveryByUserId($id);

        $lastInvoice = getLastInvoiceByUserId($id);

        payPage($lastOrder['delivery_id'], $id, $lastInvoice['invoice_id']);
    } else {
        LoginPage();
    }
}

function updateStates($idOrder, $state, $user_id)
{
    $order = getOrdersById($idOrder);
    $user = getUserById($user_id);
    ob_start();
    include "view/mail_state.php";
    $body = ob_get_clean();
    updateStateOrderById($idOrder, $state);
    $subject = "Bargylus - commande numero " . $order[0]['number'];

    $_SESSION['flashmessage'] = 'l\'état du vin à bien été changé';
    sendEmailByUser($user['email'], $user['lastname'], $user['firstname'], $subject, $body);
    pageAdmin();

}

function myOrdersPage($id)
{

    $orders = getOrdersByUserId($id);
    $wines = $orders;
    require "view/myorders.php";

}

function orderPage($id)
{


    $order = getOrdersById($id);
    // $order +=   getGrapesOrder($id);
    require "view/order.php";
}

function modifyDelivery($delivery_id)
{

    $delivery = getDeliveryById($delivery_id);
    require_once 'view/modifyDelivery.php';
}
function modifyInvoice($invoice_id)
{

    $invoice = getInvoiceById($invoice_id);
    require_once 'view/modifyInvoice.php';
}

function updateDelivery($firstname, $lastname, $street, $zip, $city, $delivery_id, $id)
{


    if (!is_numeric($zip)) {
        $_SESSION['flashmessage'] = 'le code postale n\'est pas un nombre';
        deliveriesPage($id);
        return 0;
    }
    if ($zip < 1) {
        $_SESSION['flashmessage'] = 'le code postale est plus petit ou égal à 0';
        deliveriesPage($id);
        return 0;
    }
    $deliveries = getDeliveries();

    foreach ($deliveries as $i  => $value){
        if($value['firstname'] == $firstname && $value['lastname'] == $lastname && $value['street'] == $street && $value['zip'] == $zip && $value['user_id'] == $id){
            addDeliveryVisibility($value['id']);
            deliveriesPage($id);
            return  0;
        }
    }

    $delivery = [
        'firstname' => $firstname,
        'lastname' => $lastname,
        'street' => $street,
        'zip' => $zip,
        'city' => $city,
        'id' => $delivery_id
    ];
    updateDeliveryModel($delivery);
    deliveriesPage($id);
    return 0;
}
function updateInvoice($firstname, $lastname, $street, $zip, $city, $invoice_id, $id)
{


    if (!is_numeric($zip)) {
        $_SESSION['flashmessage'] = 'le code postale n\'est pas un nombre';
        deliveriesPage($id);
        return;
    }
    if ($zip < 1) {
        $_SESSION['flashmessage'] = 'le code postale est plus petit ou égal à 0';
        deliveriesPage($id);
        return;
    }
    $invoices = getInvoices();

    foreach ($invoices as $i  => $value){
        if($value['firstname'] == $firstname && $value['lastname'] == $lastname && $value['street'] == $street && $value['zip'] == $zip && $value['user_id'] == $id){
            addInvoiceVisibility($value['id']);
            invoicesPage($id);
            return  0;
        }
    }

    $invoice = [
        'firstname' => $firstname,
        'lastname' => $lastname,
        'street' => $street,
        'zip' => $zip,
        'city' => $city,
        'id' => $invoice_id
    ];
    updateInvoiceModel($invoice);
    invoicesPage($id);
}
function addDeliveryPage($id)
{
    $user = getUserById($id);
    require_once 'view/addDeliveryPage.php';
}
function addInvoicePage($id)
{
    $user = getUserById($id);
    require_once 'view/addInvoicePage.php';
}
function addDelivery($firstname, $lastname, $street, $zip, $city, $id)
{

    if (!is_numeric($zip)) {
        $_SESSION['flashmessage'] = 'le code postale n\'est pas un nombre';
        addDeliveryPage($id);
        return 0;
    }
    if ($zip < 1) {
        $_SESSION['flashmessage'] = 'le code postale est plus petit ou égal à 0';
        addDeliveryPage($id);
        return 0;
    }


    $deliveries = getDeliveries();

    foreach ($deliveries as $i  => $value){
        if($value['firstname'] == $firstname && $value['lastname'] == $lastname && $value['street'] == $street && $value['zip'] == $zip && $value['user_id'] == $id){
            addDeliveryVisibility($value['id']);
            deliveriesPage($id);
            return  0;
        }
    }

    $delivery = [
        'firstname' => $firstname,
        'lastname' => $lastname,
        'street' => $street,
        'zip' => $zip,
        'city' => $city,
        'user_id' => $id
    ];
    addDeliveryModel($delivery);
    deliveriesPage($id);
    return  0;


}
function addInvoice($firstname, $lastname, $street, $zip, $city, $id)
{

    if (!is_numeric($zip)) {
        $_SESSION['flashmessage'] = 'le code postale n\'est pas un nombre';
        addInvoicePage($id);
        return 0;
    }
    if ($zip < 1) {
        $_SESSION['flashmessage'] = 'le code postale est inferieur ou égal à 0';
        addInvoicePage($id);
        return 0;
    }


    $invoices = getInvoices();

    foreach ($invoices as $i  => $value){

        echo "<br>";
        if($value['firstname'] == $firstname && $value['lastname'] == $lastname && $value['street'] == $street && $value['zip'] == $zip && $value['user_id'] == $id){
            addInvoiceVisibility($value['id']);
            invoicesPage($id);
            return  0;
        }
    }

    $invoice = [
        'firstname' => $firstname,
        'lastname' => $lastname,
        'street' => $street,
        'zip' => $zip,
        'city' => $city,
        'user_id'=>$id
    ];
    addInvoiceModel($invoice);
    invoicesPage($id);

}
function deleteDelivery($id, $delivery_id)
{
    if($delivery_id == $_POST['deliverySelected']){
        unset($_POST['deliverySelected']);
    }
    deleteDeliveryModel($delivery_id);
    deliveriesPage($id);
}
function deleteInvoice($id, $invoice_id)
{
    if($invoice_id == $_POST['invoiceSelected']){
        unset($_POST['invoiceSelected']);
    }
    deleteInvoiceModel($invoice_id);
    invoicesPage($id);
}
function  modePayment($id,$mode_payment,$delivery,$invoice){
    if(!$mode_payment){
        $_SESSION['flashmessage'] = "vous n'avez pas choisis votre mode de paiement";
        proceedToPayment($id);
        return 0;
    }

    contractPage($id,$mode_payment,$delivery,$invoice);
}
function contractPage($id,$mode_payment,$delivery,$invoice){
    require_once 'view/contract.php';
}


function listOfDeliveriesPage(){
    $deliveries = getDeliveries();
    require_once 'view/listOfDeliveries.php';
}

//fonction qui update la table archives pour chaque deliveries, si le zip entré équivaut au zip du delivries. Puis supprime de la base de données
// pour chaque deliveries update dans archives. Finalement retourne à la page des deliveries
function ArchiveDeliveries($zip){
    $deliveries = getDeliveries();
    foreach($deliveries as $delivery)
    {
        if($zip == $delivery['zip']){
            updateArchives($delivery);
        }

    }

    deleteDeliveries($zip);
    listOfDeliveriesPage();
}


function checkout($condition,$id,$delivery,$invoice,$mode_payment){

    if($condition != NULL){
        $lastnumber =  getNewOrderNumber();
        $order = [
            'new_number' => $lastnumber,
            'total_price' => $_SESSION['total'],
            'user_id' => $id,
            'date_purchase'=> date('Y-m-d'),
            'mode_payment_id' => $mode_payment,
            'delivery_id' => $delivery,
            'invoice_id' => $invoice
            ];
     $lastId =   addOrder($order);
     foreach ($_SESSION['basket'] as $i => $value){
         $contains = [
             'wine_id' => $value['id'],
             'order_id'=> $lastId,
             'quantity' => $value['quantity'],
             'price' => $value['priceWithSold']
         ];
         addOrdersContainWines($contains);
     }
        $order = getOrdersById($lastId);
        $user = getUserById($id);
        ob_start();
        include "view/mail_state.php";
        $body = ob_get_clean();
        updateStateOrderById($lastId, 1);
        $subject = "Bargylus - commande numero " . $order[0]['number'];

        $_SESSION['flashmessage'] = 'la commande à été crée';
        sendEmailByUser($user['email'], $user['lastname'], $user['firstname'], $subject, $body);
        orderPage($lastId);
        updateBasket(0);
    }else{
        $_SESSION['flashmessage'] = " veuillez accepter les conditions d'achat";
        contractPage($id,$mode_payment,$delivery,$invoice);
    }
}
function newsletters($firstname,$lastname,$message,$phone,$adresse){
    ob_start();
    include "view/mail_newsletters.php";
    $body = ob_get_clean();
    $subject = "Bargylus - newsletters";
    sendEmailAdmin($adresse, $lastname, $firstname, $subject, $body);
}

function listOfAccounts(){
   $users =  getUsers();
    require_once 'view/pageUsers.php';
}
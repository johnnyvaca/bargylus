<?php
/**
 *Created by bargylus.
 *FILE_NAME:index.php
 *USER:marwan
 *DATE:14.05.2020
 */

require  "controler/discountControler.php";
require  "controler/DisplaywineControler.php";
require "controler/controler.php";

session_start();
// to go home by default
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}


switch ($action) {

    case'displaywines':

       getWinesDisplay();
        break;
    case'winedetail':
        $idwine = $_GET['id'];

        WineDetail($idwine);
        break;
    case'addwinePage':
        addNewWinePage();
        break;
    case 'addwine':

        $wyear = $_POST['wyear'];
        $wname = $_POST['wname'];
        $walcohol =$_POST['walcohol'];
        $wprice =$_POST['wprice'];
        $wsize = $_POST['wsize'];
        $wstock = $_POST['wstock'];
        $wphoto = $_POST['wphoto'];
        $wdiscount = $_POST['discount'];
        $wgrape = $_POST['grape'];

        echo "<br>$wyear $wname $walcohol $wprice $wsize $wstock $wphoto $wdiscount<br>";
        addWine($wyear, $wname, $walcohol, $wprice, $wsize,$wstock,$wphoto, $wdiscount,$wgrape);
        break;
    case'editywine':
        $id= $_GET['id'];


        UpdateWinePage($id);
        break;
    case 'updateWine':
        $id = $_POST['id'];
        $wyear = $_POST['wyear'];
        $wname = $_POST['wname'];
        $walcohol =$_POST['walcohol'];
        $wprice =$_POST['wprice'];
        $wsize = $_POST['wsize'];
        $wstock = $_POST['wstock'];
        $wphoto = $_POST['photo'];
        $wdiscount = $_POST['discount'];
        $wgrape = $_POST['wgrape'];
        editWine($id, $wyear, $wname, $walcohol, $wprice, $wsize,$wstock,$wphoto, $wdiscount,$wgrape);
        break;
    case'deletewine':

        $id= $_GET['id'];
        deleteWineFromdisplay($id);

        break;

    case'about':
        aboutPage();

        break;
    case'basket':
        $basketContent = $_SESSION['basket'];
        basketPage($basketContent);
        break;
    case'contact':
        contactPage();

        break;
    case'login':
        loginPage();
        break;
    case 'tryLogin':
        $email = $_POST['email'];
        $password = $_POST['password'];
        trylogin($email, $password);

        break;
    case 'adminPage':
        pageAdmin();
        break;
    case 'logout';

        logout();

        break;
    case 'signupPage':
        signupPage();
        break;
    case 'signup':
        $email = $_POST['email'];
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $phoneNumber = $_POST['phone_number'];
        $day = $_POST['day'];$month = $_POST['month'];$year = $_POST['year'];
        $streetHome = $_POST['street_home'];
        $zip = $_POST['zip'];
        $city = $_POST['city'];
        $canton = $_POST['canton'];
        $password = $_POST['password'];
        $admin = $_POST['admin'];
        signup($email,$lastname,$firstname,$phoneNumber,$day,$month,$year,$streetHome,$zip,$city,$canton,$password,$admin);
        break;
    //(Altin) Appelle la fonction addWinesBasket
    case 'winesBasket':
        $idWine = $_GET['id'];
        $quantity = $_GET['quantity'];
        addWinesBasket($idWine,$quantity);
        break;
    case "updateWinesBasket":
        $quantity = $_GET['quantity'];
        updateBasket($quantity);
        break;
    case 'removeWineBasket':
        $idWine = $_GET['id'];
        removeWinesBasket($idWine);
        break;
    case 'proceedPayment':
        $id = $_GET['id'];
        proceedToPayment($id);
        break;
    case 'updateState':
        $id = $_POST['orderId'];
        $state = $_POST['state'];
        $user_id = $_POST['user_id'];
        updateStates($id,$state,$user_id);
        break;
    case 'profil':
        $id = $_GET['id'];
        profilPage($id);
        break;
    case 'editProfil':
        $id = $_GET['id'];
        editProfil($id);
        break;
    case 'profilElementEdition':
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $number = $_POST['number'];
        $street = $_POST['street'];
        $zip = $_POST['zip'];
        $city = $_POST['city'];
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        profilElementEdition($id,$firstname,$lastname,$number,$street,$zip,$city,$day,$month,$year);
        break;
    case 'myorders':
        $id = $_GET['id'];
        myOrdersPage($id);
        break;
    case 'order':
        $id = $_GET['id'];
        orderPage($id);
        break;
    case 'deliveries':
        $id = $_GET['id'];
        deliveriesPage($id);
        break;
    case 'invoices':
        $id = $_GET['id'];
        invoicesPage($id);
        break;
    case 'payPage':
       $id = $_POST['id'];
     $deliverySelected =   $_POST['deliverySelected'];
        $invoiceSelected =   $_POST['invoiceSelected'];

        payPage($deliverySelected,$id,$invoiceSelected);
        break;
    case 'modifyDelivery':
        $delivery_id = $_GET['delivery_id'];

        modifyDelivery($delivery_id);
        break;
    case 'modifyInvoice':
        $invoice_id = $_GET['invoice_id'];

        modifyInvoice($invoice_id);
        break;
    case 'updateDelivery':
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $street = $_POST['street'];
        $zip = $_POST['zip'];
        $city = $_POST['city'];
        $delivery_id = $_POST['delivery_id'];
        $id = $_POST['id'];
        updateDelivery($firstname,$lastname,$street,$zip,$city,$delivery_id,$id);
        break;
    case 'updateInvoice':
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $street = $_POST['street'];
        $zip = $_POST['zip'];
        $city = $_POST['city'];
        $invoice_id = $_POST['invoice_id'];
        $id = $_POST['id'];
        updateInvoice($firstname,$lastname,$street,$zip,$city,$invoice_id,$id);
        break;
    case'addDeliveryPage':
       $id = $_GET['id'];
        addDeliveryPage($id);
        break;
    case'addInvoicePage':
        $id = $_GET['id'];
        addInvoicePage($id);
        break;
    case 'addDelivery':
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $street = $_POST['street'];
        $zip = $_POST['zip'];
        $city = $_POST['city'];
        $id = $_POST['id'];
        addDelivery($firstname,$lastname,$street,$zip,$city,$id);
        break;
    case 'addInvoice':
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $street = $_POST['street'];
        $zip = $_POST['zip'];
        $city = $_POST['city'];
        $id = $_POST['id'];
        addInvoice($firstname,$lastname,$street,$zip,$city,$id);
        break;
    case 'deleteDelivery':
        $id = $_GET['id'];
        $delivery_id = $_GET['delivery_id'];
        deleteDelivery($id,$delivery_id);
        break;
    case 'deleteInvoice':
        $id = $_GET['id'];
        $invoice_id = $_GET['invoice_id'];
        deleteInvoice($id,$invoice_id);
        break;
    case 'mode_payment':
        $id = $_POST['id'];
        $delivery = $_POST['delivery'];
        $invoice = $_POST['invoice'];
        $mode_payment = $_POST['mode_payment'];
        modePayment($id,$mode_payment,$delivery,$invoice);
        break;
    case 'checkout':
        $id = $_POST['id'];
        $delivery = $_POST['delivery'];
        $invoice = $_POST['invoice'];
        $mode_payment = $_POST['mode_payment'];
       $condition = $_POST['condition'];
        checkout($condition,$id,$delivery,$invoice,$mode_payment);
        break;
    case 'listOfDeliveriesPage':
        listOfDeliveriesPage();
        break;
    case 'archiveDeliveries':
        $zip = $_POST['zip'];
        ArchiveDeliveries($zip);
        break;
    case 'newsletters':
           $firstname = $_POST['firstname'];
           $lastname = $_POST['lastname'];
           $message = $_POST['message'];
           $phone = $_POST['phone'];
           $adresse = $_POST['adresse'];
           newsletters($firstname,$lastname,$message,$phone,$adresse);
        break;
    case 'listOfAccounts':
        listOfAccounts();
        break;
    default :
        home();
        break;
}
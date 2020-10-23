select users.id as "user_id", deliveries.firstname, deliveries.lastname, deliveries.street, deliveries.zip, deliveries.city, deliveries.id as "delivery_id" from users_receivein_deliveries
INNER JOIN deliveries ON users_receivein_deliveries.delivery_id = deliveries.id
INNER JOIN users ON users_receivein_deliveries.user_id =  users.id
WHERE deliveries.id = 7
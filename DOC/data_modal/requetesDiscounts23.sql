SELECT * FROM orders
INNER JOIN users ON orders.user_id = users.id
INNER JOIN deliveries ON orders.delivery_id = deliveries.id
INNER JOIN bargylus_db.users_receivein_deliveries ON users_receivein_deliveries.delivery_id = deliveries.id


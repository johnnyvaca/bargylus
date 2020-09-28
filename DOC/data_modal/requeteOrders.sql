
select users.id, users.firstname, users.lastname,wines.winename, orders_contain_wines.quantity, orders_contain_wines.price as 'price_wine', orders.number, orders.state, orders.total_price, orders.id AS 'id_order'  FROM bargylus_db.orders_contain_wines
inner join wines on orders_contain_wines.wine_id = wines.id
inner join orders on  orders_contain_wines.order_id = orders.id
inner join users on  orders.user_id = users.id WHERE users.lastname LIKE '%' ORDER BY users.lastname;
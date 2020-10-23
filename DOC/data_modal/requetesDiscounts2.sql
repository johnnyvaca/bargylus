select users.id, users.firstname, users.lastname,wines.winename, users.email, orders_contain_wines.quantity, 
                    orders_contain_wines.price as 'price_wine',  orders.date_purchase, 
                    orders.number, orders.states_id, orders.total_price, orders.id AS 'id_order', states.name AS 'state_name', 
                    states.id AS 'state_id', wines.photo,wines.id as 'wine_id'   FROM bargylus_db.orders_contain_wines
inner join wines on orders_contain_wines.wine_id = wines.id
inner join orders on  orders_contain_wines.order_id = orders.id
INNER JOIN states ON orders.states_id = states.id
inner join users on  orders.user_id = users.id WHERE users.id =13
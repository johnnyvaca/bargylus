SELECT users.id, users.firstname , users.lastname, wines.winename, users_buy_wines.date, users_buy_wines.quantity, orders.number FROM users_buy_wines
INNER JOIN users ON users_buy_wines.user_id = users.id
INNER JOIN orders ON users_buy_wines.orders_id = orders.id
INNER JOIN wines ON users_buy_wines.wine_id = wines.id
INNER JOIN states ON orders.states_id = states.id

WHERE users.lastname = "Jack";
SELECT users.id, users.firstname , users.lastname, wines.winename, users_buy_wines.date, users_buy_wines.quantity, states.name FROM users_buy_wines
INNER JOIN users ON users_buy_wines.user_id = users.id
INNER JOIN states ON users_buy_wines.state_id = states.id
INNER JOIN wines ON users_buy_wines.wine_id = wines.id

WHERE users.id = 3;
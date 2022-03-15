SELECT s.name, u.firstname,u.lastname,c.date,c.adultos,c.ninos FROM users_has_services us
JOIN users u ON u.id = us.users_id
JOIN culte c ON c.id = us.culte_id
JOIN services s ON s.id = us.services_id
WHERE c.date = '2022-03-10'
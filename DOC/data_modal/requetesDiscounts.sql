SELECT * FROM wines_compose_grapes 
INNER JOIN wines ON wines_compose_grapes.wine_id = wines.id
INNER JOIN discounts on wines.discounts_id = discounts.id WHERE wines.id = 4;
INNER JOIN grapes  on  wines_compose_grapes.grape_id = grapes.id
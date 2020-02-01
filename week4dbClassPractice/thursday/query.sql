\echo '*********************List all restaurant names*********************'
-- write your query here
SELECT name FROM w4_restaurant;
\echo '****************List restaurant names and addresses****************'
SELECT name, address FROM w4_restaurant;

\echo '************************List  all customers************************'
SELECT * FROM w4_customer;

\echo '**List  all menu item names and prices of a particular restaurant**'
SELECT * FROM w4_menu_item
WHERE restaurant_id = 1;

\echo '*View all orders of a particular customer - show the customer name*'
SELECT * FROM w4_menu_item WHERE;

\echo '************List  all orders of a particular restaurant************'
-- write your query here



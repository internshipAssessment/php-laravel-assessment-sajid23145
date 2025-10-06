-- Schema (reference)
-- users(id, name, email, created_at)
-- orders(id, user_id, total_amount, created_at)
-- order_items(id, order_id, product_id, quantity, unit_price)
-- products(id, name, sku, price)

-- Task 1 — Users with >3 orders in the last 30 days
-- Return: user_id, name, order_count
-- Sort: order_count DESC
-- TODO: Write the SQL below
SELECT
  u.user_id,
  u.name,
  COUNT(o.order_id) AS order_count
FROM users AS u
JOIN orders AS o
  ON u.user_id = o.user_id
WHERE
  o.order_date >= NOW() - INTERVAL '30 days' 
  o.order_date >= DATEADD(day, -30, GETDATE())
GROUP BY
  u.user_id,
  u.name
HAVING
  COUNT(o.order_id) > 3
ORDER BY
  order_count DESC;



-- Task 2 — Products never ordered
-- Return: id, name of products that appear in ZERO order_items
-- TODO: Write the SQL below
SELECT
  p.id,
  p.name
FROM products AS p
LEFT JOIN order_items AS oi
  ON p.id = oi.product_id
WHERE
  oi.product_id IS NULL;
;

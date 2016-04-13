SELECT orders.id, customer.email, orders.project_name, specifications.path, orders.date_opened, orders.date_closed, orders.price, orders.deadline, statuses.name
FROM orders, customer, specifications, statuses
WHERE orders.order_status = :orders_status
AND orders.customer = customer.id
AND orders.specifications = specifications.id
AND orders.order_status = statuses.id
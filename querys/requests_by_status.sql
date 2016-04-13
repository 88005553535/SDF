SELECT request.id, request.title, request.description, customer.email, request.date_opened, request.date_closed, statuses.name
FROM request, customer, statuses
WHERE request.customer = customer.id
AND request.request_status = statuses.id
AND statuses.name = :status_name
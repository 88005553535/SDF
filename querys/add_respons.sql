INSERT INTO `respons` (`id`, `request`, `date_respons`, `text_respons`, `employee`)
SELECT NULL, :requestId, CURDATE(), :respons_text, employees.id FROM employees WHERE employees.email = :employee

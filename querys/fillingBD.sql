INSERT INTO `customer_type` (`id`, `NAME`) VALUES (NULL, "Приватна особа"), (NULL, 'Юридична особа');

INSERT INTO `account_types` (`id`, `NAME`) VALUES
(1, 'manager'),
(2, 'developer'),
(3, 'customer'),
(4, 'support');

INSERT INTO `users` (`id`, `email`, `customer`, `employee`, `passwrd`, `account_type`) VALUES
(1, 'manager@manager', NULL, NULL, 'd54c5a43c898f710a562b7502a064dd7056b4185', 1),
(2, 'customer@customer', 1, NULL, 'd54c5a43c898f710a562b7502a064dd7056b4185', 3),
(3, 'developer@developer', NULL, NULL, 'd54c5a43c898f710a562b7502a064dd7056b4185', 2),
(4, 'support@support', NULL, NULL, 'd54c5a43c898f710a562b7502a064dd7056b4185', 4);

INSERT INTO 'statuses' ('id','name') VALUES ('1', "Активно");

INSERT INTO `employees` (`id`, `firstname`, `surname`, `secondname`, `patronymic`, `email`, `post`, `date_hired`, `date_fired`) VALUES
(1, NULL, NULL, NULL, NULL, 'developer@developer', NULL, '2016-04-20', NULL),
(2, NULL, NULL, NULL, NULL, 'support@support', NULL, '2016-04-20', NULL);
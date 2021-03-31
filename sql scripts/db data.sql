INSERT INTO `roles` (`role_id`, `role_name`) VALUES (NULL, 'admin');
INSERT INTO `roles` (`role_id`, `role_name`) VALUES (NULL, 'subdivision manager');
INSERT INTO `roles` (`role_id`, `role_name`) VALUES (NULL, 'building manager');
INSERT INTO `roles` (`role_id`, `role_name`) VALUES (NULL, 'apartment owner');

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email_id`, `password`, `area_code`, `phone_number`, `joining_datetime`, `roles_role_id`) VALUES (NULL, 'Ichigo', 'Kurosaki', 'ao@gmail.com', 'ao', '123', '1234562', '2021-03-01 06:31:03', '4');
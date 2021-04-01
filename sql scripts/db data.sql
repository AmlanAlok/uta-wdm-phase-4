INSERT INTO `roles` (`role_id`, `role_name`) VALUES (NULL, 'admin');
INSERT INTO `roles` (`role_id`, `role_name`) VALUES (NULL, 'subdivision manager');
INSERT INTO `roles` (`role_id`, `role_name`) VALUES (NULL, 'building manager');
INSERT INTO `roles` (`role_id`, `role_name`) VALUES (NULL, 'apartment owner');

INSERT INTO `utilities` (`utility_id`,`utility_name`) VALUES (NULL, 'electricity');
INSERT INTO `utilities` (`utility_id`,`utility_name`) VALUES (NULL, 'gas');
INSERT INTO `utilities` (`utility_id`,`utility_name`) VALUES (NULL, 'water');
INSERT INTO `utilities` (`utility_id`,`utility_name`) VALUES (NULL, 'internet');

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email_id`, `password`, `area_code`, `phone_number`, `joining_datetime`, `roles_role_id`) VALUES (NULL, 'Ichigo', 'Kurosaki', 'ao@gmail.com', 'ao', '123', '1234562', '2021-03-01 06:31:03', '4');

update subdivisions set users_user_id=2 where subdivision_name='Dwarka';
update subdivisions set users_user_id=5 where subdivision_name='Sky';

select * from users as u 
inner join subdivisions as s 
on u.user_id = s.users_user_id
inner join roles as r 
on u.roles_role_id=r.role_id
where r.role_name = 'subdivision manager';

select * from users as u 
inner join subdivisions as s 
on u.user_id = s.users_user_id
inner join roles as r 
on u.roles_role_id=r.role_id;

-- Add BM 1
INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email_id`, `password`, `area_code`, `phone_number`, `joining_datetime`, `roles_role_id`) 
VALUES (NULL, 'Arya', 'Stark', 'arya@gmail.com', 'arya', '12354', '123456232', '2021-03-01 06:31:03', '3');
-- Add BM 2
INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email_id`, `password`, `area_code`, `phone_number`, `joining_datetime`, `roles_role_id`) 
VALUES (NULL, 'Sansa', 'Stark', 'sansa@gmail.com', 'sansa', '10001', '1239876232', '2021-03-02 06:31:03', '3');

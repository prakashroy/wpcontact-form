# wpcontact-form

Custom Contact Form Plugin For Wordpress 

Using custom contact form plugin we can easily contact form in any page or post using shortcode [iq_contact_us]

How to use plugin?

Step1: Copy contact_plugin.php to wp-contebt/plugins directory and go to admin dashboard and activate example of contact form plugin.

Step2: Use shortcode [iq_contact_us] in any page or post

Step3: Submit contact information to save in database

Create Table before copying plugin 

CREATE TABLE `wp_iqcontacts` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NULL DEFAULT NULL,
	`description` TEXT NULL,
	`gender` TINYINT(4) NULL DEFAULT NULL,
	`terms` TINYINT(4) NULL DEFAULT '0',
	`country` INT(11) NULL DEFAULT NULL,
	`createDate` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
)
ENGINE=InnoDB
;

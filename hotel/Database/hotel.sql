CREATE TABLE IF NOT EXISTS `customer_authentication` (
	`customer_email` varchar(50) NOT NULL,
	`customer_password` varchar(50) CHARACTER SET utf32 NOT NULL,
	PRIMARY KEY (`customer_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `creditcard` (
	`creditcard_id` int(11) NOT NULL AUTO_INCREMENT,
	`creditcard_number` varchar(16) NOT NULL,
	`creditcard_fullname` varchar(50) NOT NULL,
	`creditcard_address` varchar(50) NOT NULL,
	`creditcard_zipcode` varchar(5) NOT NULL,
	`creditcard_expiration_date` varchar(4) NOT NULL,
	`creditcard_security_code` varchar(3) NOT NULL,
	PRIMARY KEY (`creditcard_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `customer_payment` (
	`customer_email` varchar(50) DEFAULT NULL,
	`creditcard_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

-- Modify customer table
ALTER TABLE `customer` 
	ADD UNIQUE(`customer_email`),
	ADD INDEX(`customer_email`);
-- Modify customer_TCno can have NULL value
ALTER TABLE `customer`
	MODIFY COLUMN `customer_TCno` varchar(11) NULL; 


ALTER TABLE `customer_payment`
	ADD CONSTRAINT `customer_payment_creditcard_id_fk` FOREIGN KEY (`creditcard_id`) REFERENCES `creditcard` (`creditcard_id`) ON DELETE CASCADE ON UPDATE CASCADE,
	ADD CONSTRAINT `customer_payment_customer_email_fk` FOREIGN KEY (`customer_email`) REFERENCES `customer` (`customer_email`) ON DELETE CASCADE ON UPDATE CASCADE;

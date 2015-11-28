SELECT sum(quantity * unit_price) FROM invoice_actual  WHERE project_id='4' and invoiced=0;

SELECT project_id,invoice_id,invoiced FROM invoice_actual;

INSERT INTO invoice_send
 (project_id,amount,vat)
VALUES
(4,  1000,0)  ;

UPDATE invoice_actual
SET
  invoice_id=1001,
  invoiced=1
WHERE project_id=4 AND invoiced=0;

DROP TABLE IF EXISTS invoice_send;
CREATE TABLE IF NOT EXISTS `invoice_send` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `project_id` INT(11) NOT NULL,
    `project_code` varchar(10) DEFAULT '',
    invoice_date  DATE NOT NULL ,
    `gross_amount` DECIMAL(10,2) NOT NULL DEFAULT '0' ,
    `vat` DECIMAL(10,2) NOT NULL DEFAULT '0',
     amount DECIMAL(10,2) NOT NULL DEFAULT '0' ,
    canceled enum('Yes','No') NOT NULL DEFAULT 'No',
    `status` enum('prepared','send','paid','partially_paid'),
   payment_date DATE not null ,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1001 ;

ALTER TABLE `invoice_send`
ADD CONSTRAINT `invoice_send_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

DROP TABLE IF EXISTS mycigarette;
CREATE TABLE IF NOT EXISTS mycigarette (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  number_cig INT(11) NOT NULL DEFAULT 1,
  cig_date DATETIME NOT NULL DEFAULT now(),
  `creation_time`     DATETIME DEFAULT CURRENT_TIMESTAMP,
  `modification_time` DATETIME ON UPDATE CURRENT_TIMESTAMP,
  `comment` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


DROP TABLE IF EXISTS myexpense;
CREATE TABLE IF NOT EXISTS myexpense (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `amount` DECIMAL(10,2) NOT NULL DEFAULT '0' ,
  `person_name` VARCHAR(50),
  `expense_type` VARCHAR(50),
   expenset_date DATE not null ,
  `comment` text,
  `creation_time`     DATETIME DEFAULT CURRENT_TIMESTAMP,
  `modification_time` DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

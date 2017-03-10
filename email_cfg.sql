--

CREATE TABLE IF NOT EXISTS `email_cfg` (
  `sender_name` text COLLATE latin1_general_ci NOT NULL,
  `sender_address` text COLLATE latin1_general_ci NOT NULL,
  `protocol` text COLLATE latin1_general_ci NOT NULL,
  `smtp_host` text COLLATE latin1_general_ci NOT NULL,
  `smtp_user` text COLLATE latin1_general_ci NOT NULL,
  `smtp_pass` text COLLATE latin1_general_ci NOT NULL,
  `smtp_port` int(5) NOT NULL,
  `smtp_timeout` int(5) NOT NULL,
  `mailtype` text COLLATE latin1_general_ci NOT NULL,
  `charset` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dump dei dati per la tabella `email_cfg`
--

INSERT INTO `email_cfg` (`sender_name`, `sender_address`, `protocol`, `smtp_host`, `smtp_user`, `smtp_pass`, `smtp_port`, `smtp_timeout`, `mailtype`, `charset`) VALUES
('the name of sender', 'the sender email', 'smtp', 'ssl://smtp.gmail.com (example)', 'smtp user', 'password', 465, 5, 'html', 'iso-8859-1');


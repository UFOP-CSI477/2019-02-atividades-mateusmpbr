CREATE DATABASE IF NOT EXISTS `protocols` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

-- OBS: Executar a instrução comentada abaixo apenas se não existir esse usuário
-- CREATE USER `sistemaweb`@`localhost` identified by "123456";

GRANT ALL PRIVILEGES ON protocols.* TO `sistemaweb`@`localhost`;
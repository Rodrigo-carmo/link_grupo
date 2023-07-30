-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31/07/2023 às 01:25
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `link_grupo`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `isAdmin` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `isAdmin`) VALUES
(1, 'RODRIGO FRANCISCO DO CARMO', 'rodrigo65225@gmail.com', '123', 1),
(2, 'RODRIGO', 'rodrigo65225@gmail.com', '1', 0),
(3, 'rodrigo', 'rodrigo65225@gmail.com', '$2y$10$HxmR/GoMn6UT2naOoeBxpuNyf1JtOZqHHph/PB4jIXeJj.r8N2XwC', 0),
(4, 'rodrigo', 'sss@gmail.com', '$2y$10$S9GpFzCNGPLQnVY1Bztp4eilLyx5dcTTk6rT3KmgeUIZ4aEJmkQiO', 0),
(5, 'RODRIGO', 'sssd@gmail.com', '$2y$10$bzbJGDN8IGc..UXki6CN3Ok7yakY1vp/ZxLnpd9EX9.nWRY42viPG', 0),
(6, 'RODRIGO FRANCISCO DO CARMO', 'rfc.desenvolvedor@gmail.com', '$2y$10$4fFUKuKUIuXpfB1SZzt20er9WA9TxO0kH1ZM65q6eOCkBHeGwRLwa', 0),
(7, 'ddd', 'aaaaa@aaa', '$2y$10$CsSxYPbyb3x4FL4svN8TSu90USLWzrnRtkerlXwIomz6ODciUai8m', 0),
(8, 'RODRIGO FRANCISCO DO CARMO', 'ddd@aaa', '$2y$10$riAyEgXJwfxUbOOYyY6CbeVzSclSxitCEJPpkGjKwE6R9SZr1oZuK', 0),
(9, 'aaa', 'aaaaa@aaaaaaaaa', '$2y$10$o53UVPFy7mXYydp79ahTHOhztxB/AoVUDVQo3qFE3Ti6mjqpLwXye', 0),
(10, 'RODRIGO FRANCISCO DO CARMO', 'gg@fgdsa', '$2y$10$1lNuPu9JmIMSlIiWRzeC1OtnkWVwQCaqGL9NvKrB52VXEK2GEVuZS', 0),
(11, '', 'aaaaaaaaa@aa', '$2y$10$QmE5GB/HG9flZ5rRROnhNuFt60pbdL5mnT9sXRnNn9liCtlNt0b.2', 0),
(12, 'aaa', 'rodrissgo65225@gmail.com', '$2y$10$4vlVgUmpEDhnkX0G2gIEqePr1gj.7rJ2SdTipXa1CfELIiYS383Oa', 0),
(13, 'FDSAFDASFDSAFD', 'FADSFDSAFDSAFDASSA@FDSAFDAFD', '$2y$10$yYLyVkzzcFFP0gDdHv5cHuFJqG9CfSSA.DeMSEoqRI3XfhJUcaC9a', 0),
(14, 'RODRIGO FRANCISCO DO CARMO', 'fdsafdsafdsafdsafdsa@fdsafdsafdsafdf', '$2y$10$djG2OTO7z3/mYoCmWGDo0.Dnztmnk185TWzN/lpx6ahqqaB8EHM8u', 0),
(15, 'fdsafdsafdsafdsafdsafdsafdsafdasfdsafdsafds', 'fdsafdsafdsafdsafdsaf@fdafdsfd', '$2y$10$hszBShm7dtIduhBarYlB8uUJ6A2so493QsFAUxsp8xtLbtOlRWeBS', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

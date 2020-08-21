CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile` varchar(10) NOT NULL
);

ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

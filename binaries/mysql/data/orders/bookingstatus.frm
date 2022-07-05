TYPE=VIEW
query=select `orders`.`booking`.`BookingNo` AS `BookingNo`,`orders`.`performance`.`FilmName` AS `FilmName`,`orders`.`member`.`MemberName` AS `MemberName`,`orders`.`performance`.`PerformanceStatus` AS `PerformanceStatus`,`orders`.`screen`.`ScreenStatus` AS `ScreenStatus`,`orders`.`performance`.`PerformanceDate` AS `Date`,`orders`.`performance`.`CinemaName` AS `CinemaName` from (((`orders`.`performance` join `orders`.`booking` on((`orders`.`performance`.`PerformanceNo` = `orders`.`booking`.`PerformanceNo`))) join `orders`.`screen` on((`orders`.`performance`.`ScreenNo` = `orders`.`screen`.`ScreenNo`))) join `orders`.`member` on((`orders`.`booking`.`MemberNo` = `orders`.`member`.`MemberNo`))) where ((`orders`.`performance`.`PerformanceStatus` = \'Closed\') or (`orders`.`screen`.`ScreenStatus` = \'Closed\')) group by `orders`.`booking`.`BookingNo`
md5=945844158575629b2bcac25792e83481
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2022-03-31 21:38:00
create-version=1
source=select `orders`.`booking`.`BookingNo` AS `BookingNo`,`orders`.`performance`.`FilmName` AS `FilmName`,`orders`.`member`.`MemberName` AS `MemberName`,`orders`.`performance`.`PerformanceStatus` AS `PerformanceStatus`,`orders`.`screen`.`ScreenStatus` AS `ScreenStatus`,`orders`.`performance`.`PerformanceDate` AS `Date` ,`orders`.`performance`.`cinemaname` AS `CinemaName` from (((`orders`.`performance` join `orders`.`booking` on((`orders`.`performance`.`PerformanceNo` = `orders`.`booking`.`PerformanceNo`))) join `orders`.`screen` on((`orders`.`performance`.`ScreenNo` = `orders`.`screen`.`ScreenNo`))) join `orders`.`member` on((`orders`.`booking`.`MemberNo` = `orders`.`member`.`MemberNo`))) where ((`orders`.`performance`.`PerformanceStatus` = \'Closed\') or (`orders`.`screen`.`ScreenStatus` = \'Closed\')) group by `orders`.`booking`.`BookingNo`
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `orders`.`booking`.`BookingNo` AS `BookingNo`,`orders`.`performance`.`FilmName` AS `FilmName`,`orders`.`member`.`MemberName` AS `MemberName`,`orders`.`performance`.`PerformanceStatus` AS `PerformanceStatus`,`orders`.`screen`.`ScreenStatus` AS `ScreenStatus`,`orders`.`performance`.`PerformanceDate` AS `Date`,`orders`.`performance`.`CinemaName` AS `CinemaName` from (((`orders`.`performance` join `orders`.`booking` on((`orders`.`performance`.`PerformanceNo` = `orders`.`booking`.`PerformanceNo`))) join `orders`.`screen` on((`orders`.`performance`.`ScreenNo` = `orders`.`screen`.`ScreenNo`))) join `orders`.`member` on((`orders`.`booking`.`MemberNo` = `orders`.`member`.`MemberNo`))) where ((`orders`.`performance`.`PerformanceStatus` = \'Closed\') or (`orders`.`screen`.`ScreenStatus` = \'Closed\')) group by `orders`.`booking`.`BookingNo`

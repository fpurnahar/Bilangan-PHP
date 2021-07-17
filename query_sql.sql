SELECT terminal, SUM(amount) as total FROM transaksi_atm  WHERE terminal = 'SV0003' GROUP BY terminal;

SELECT SUM(amount) as Total FROM transaksi_atm WHERE nomor_kartu LIKE '%7790%';

SELECT terminal_atm.merk, COUNT(*) as Jumlah_Transaksi, SUM(transaksi_atm.amount) as Total_Amount 
FROM transaksi_atm INNER JOIN terminal_atm 
ON transaksi_atm.terminal = terminal_atm.nomor_terminal 
WHERE terminal_atm.merk = 'HITACHI' OR terminal_atm.merk = 'HYOSUNG' 
GROUP BY terminal_atm.merk ORDER BY terminal_atm.merk;
create database Banco;

create database Banco;
use Banco;

Create table Usuario(
   id_user  int primary key,
   nombre  varchar(400),  -- Funcionario
   Correo  varchar(400),
   Password varchar(400)
 )


Create table Cliente(
   DPI  varchar(400) primary key,
   Pasaporte  varchar(400),
   Nombre varchar(400), 
   Apellido varchar(400),
   Razon_social varchar(400),
   Municipio varchar(400),
   Departamento varchar(400),
   Direccion varchar(400),
   Telefono varchar(400),
   Correo  varchar(400),
   id_user1 int,
   CONSTRAINT fk_id_user FOREIGN KEY (id_user1) REFERENCES Usuario (id_user)
)



    Create table Cuenta_Ahorros(
    ID_Cuenta  varchar(400) primary key,
    Saldo decimal(10,2),
    Estado int,
    Fecha date,
    Telefono varchar(400),
    Moneda decimal(10,2) ,
    ID_Cliente varchar(400),  --(FK)
    id_user2 int,--(FK)
    CONSTRAINT fk_id_user2 FOREIGN KEY (id_user2) REFERENCES Usuario (id_user),
    CONSTRAINT fk_ID_Cliente FOREIGN KEY (ID_Cliente) REFERENCES Cliente (DPI)

    )

Create table Agencia(
   ID_Agencia  int primary key,
   Nombre varchar(400)
)

Create table Cajero(
   ID_Cajero  int primary key,
   Nombre varchar(400),
   ID_Agencia1  int, --(FK)
   CONSTRAINT fk_ID_Agencia FOREIGN KEY (ID_Agencia1) REFERENCES Agencia (ID_Agencia)
)
--drop table Cajero;

Create table Transaccion(
   ID_Transacción varchar(400) primary key,
   Tipo_de_Transaccion varchar(10),
   Monto Decimal(10,2),
   Saldo_Resultante Decimal(10,2),
   Fecha Date,
   ID_Cuenta1 varchar(400), --(FK) 
   ID_Cajero1  int, --(FK)
   id_user3 int,
   CONSTRAINT fk_id_user3 FOREIGN KEY (id_user3) REFERENCES Usuario (id_user),
   CONSTRAINT fk_ID_Cuenta1 FOREIGN KEY (ID_Cuenta1) REFERENCES Cuenta_Ahorros (ID_Cuenta),
   CONSTRAINT fk_ID_Cajero1 FOREIGN KEY (ID_Cajero1) REFERENCES Cajero (ID_Cajero)
)




--a. Consulta para visualizar a todos los clientes con su número de cuentas de ahorro activas y no activas:


SELECT 
    c.ID_Cliente,
    c.Nombre,
    c.Apellido,
    COUNT(CASE WHEN ca.Estado = 'Activa' THEN 1 END) AS Cuentas_Activas,
    COUNT(CASE WHEN ca.Estado = 'No Activa' THEN 1 END) AS Cuentas_No_Activas
FROM
    Cliente c
LEFT JOIN
    "Cuenta de Ahorros" ca ON c.ID_Cliente = ca.ID_Cliente
GROUP BY
    c.ID_Cliente,
    c.Nombre,
    c.Apellido;


--- b. Consulta para obtener el total de saldo que todos los clientes han tenido en el banco durante cada mes del año:
SELECT
    EXTRACT(MONTH FROM t.Fecha) AS Mes,
    SUM(t.Saldo) AS Saldo_Total
FROM
    "Transacción" t
GROUP BY
    EXTRACT(MONTH FROM t.Fecha)
ORDER BY
    EXTRACT(MONTH FROM t.Fecha);

--  c. Consulta para visualizar a los clientes que tienen una cuenta de ahorros con un saldo mayor a 20,000 y que realizaron un depósito en los últimos 15 días:

SELECT
    c.ID_Cliente,
    c.Nombre,
    c.Apellido
FROM
    Cliente c
JOIN
    "Cuenta de Ahorros" ca ON c.ID_Cliente = ca.ID_Cliente
JOIN
    "Transacción" t ON ca.ID_Cuenta = t.ID_Cuenta
WHERE
    ca.Saldo > 20000 AND
    t."Tipo de Transacción" = 'Depósito' AND
    t.Fecha >= NOW() - INTERVAL '15 days';
-- d 

SELECT
    a.ID_Agencia,
    a.Nombre AS Nombre_Agencia,
    COUNT(c.ID_Cajero) AS Cajeros_Atendiendo
FROM
    Agencia a
JOIN
    Cajero c ON a.ID_Agencia = c.ID_Agencia
JOIN
    "Transacción" t ON c.ID_Cajero = t.ID_Cajero
WHERE
    t."Tipo de Transacción" = 'Depósito' AND
    t.Fecha >= NOW() - INTERVAL '5 days'
GROUP BY
    a.ID_Agencia,
    a.Nombre;


-- e. Consulta para monitorear a los clientes que realizan transacciones sospechosas durante cada mes:

SELECT
    c.ID_Cliente,
    c.Nombre,
    c.Apellido,
    EXTRACT(MONTH FROM t.Fecha) AS Mes,
    t."Tipo de Transacción",
    t.Monto,
    ca.Moneda
FROM
    Cliente c
JOIN
    "Cuenta de Ahorros" ca ON c.ID_Cliente = ca.ID_Cliente
JOIN
    "Transacción" t ON ca.ID_Cuenta = t.ID_Cuenta
WHERE
    (ca.Moneda = 'USD' AND t.Monto > 2000) OR
    (ca.Moneda = 'GTQ' AND ABS(t.Monto) > 20000) OR
    (t."Tipo de Transacción" = 'Retiro' AND
     t.Fecha >= NOW() - INTERVAL '1 month' AND
     NOT EXISTS (
         SELECT 1
         FROM "Transacción" t2
         WHERE t2."Tipo de Transacción" = 'Depósito' AND
               t2.ID_Cliente = c.ID_Cliente AND
               t2.ID_Agencia = 1  -- ID de la agencia central
     )
    );











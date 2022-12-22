-- listar todas las monedas por sucursal
CREATE OR ALTER PROCEDURE SP_GET_COINS(
    @branchOfficeId INT
)
AS
BEGIN
    SELECT * FROM [dbo].[Coin] WHERE branchOfficeId = @branchOfficeId;
END;

-- OBTENER LA MONEDA POR ID
CREATE OR ALTER PROCEDURE SP_GET_COIN_BY_ID( 
	@coinId INT 
)
AS
BEGIN
	SELECT * FROM [dbo].[Coin] WHERE coinId = @coinId;
END;

-- ELIMINAR REGISTRO MONEDA OJO SOLO CAMBIAR STATUS
CREATE OR ALTER PROCEDURE SP_DELETE_COIN_BY_ID( 
	@coinId INT, 
	@coinStatus CHAR(1) 
)
AS
BEGIN
	UPDATE [dbo].[Coin] SET coinStatus = @coinStatus WHERE coinId = @coinId;
END;

-- REGISTRAR UNA MONEDA NUEVA
CREATE OR ALTER PROCEDURE SP_INSERT_COIN(
	@branchOfficeId INT,
	@coinName VARCHAR(50)
)
AS
BEGIN
	INSERT INTO [dbo].[Coin] 
	( 
		branchOfficeId, 
		coinName, 
		coinCreatedAt, 
		coinStatus 
	)
	VALUES
	( 
		@branchOfficeId, 
		@coinName, 
		GETDATE(), 
		'S'
	);
END;

-- ACTUALIZAR UNA MONEDA
CREATE OR ALTER PROCEDURE SP_MODIFY_COIN(
	@coinId INT,
	@branchOfficeId INT,
	@coinName VARCHAR(50)
)
AS
BEGIN
	UPDATE [dbo].[Coin] SET
		branchOfficeId = @branchOfficeId,
		coinName = @coinName
	WHERE
		coinId = @coinId;
END;


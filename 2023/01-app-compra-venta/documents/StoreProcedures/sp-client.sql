-- listar todas los clientes
CREATE OR ALTER PROCEDURE SP_GET_CLIENT(
    @enterpriseId INT
)
AS
BEGIN
   SELECT 
		[dbo].[Client].clientId, 
		[dbo].[Client].enterpriseId,
		[dbo].[Enterprise].enterpriseName,
		[dbo].[Client].clientName,
		[dbo].[Client].clientRUC,
		[dbo].[Client].clientPhone,
		[dbo].[Client].clientAddress,
		[dbo].[Client].clientEmail,
		[dbo].[Client].clientCreatedAt,
		[dbo].[Client].clientStatus
	FROM 
	[dbo].[Client] INNER JOIN [dbo].[Enterprise] 
	ON ( [dbo].[Client].enterpriseId = [dbo].[Client].enterpriseId )
	WHERE [dbo].[Client].enterpriseId = @enterpriseId;
END;

-- OBTENER EL CLIENT POR ID
CREATE OR ALTER PROCEDURE SP_GET_CLIENT_BY_ID( 
	@clientId INT 
)
AS
BEGIN
	SELECT 
		[dbo].[Client].clientId, 
		[dbo].[Client].enterpriseId,
		[dbo].[Enterprise].enterpriseName,
		[dbo].[Client].clientName,
		[dbo].[Client].clientRUC,
		[dbo].[Client].clientPhone,
		[dbo].[Client].clientAddress,
		[dbo].[Client].clientEmail,
		[dbo].[Client].clientCreatedAt,
		[dbo].[Client].clientStatus
	FROM 
	[dbo].[Client] INNER JOIN [dbo].[Enterprise] 
	ON ( [dbo].[Client].enterpriseId = [dbo].[Client].enterpriseId )
	WHERE [dbo].[Client].clientId = @clientId;
END;

-- ELIMINAR REGISTRO DE CLIENTES OJO SOLO CAMBIAR STATUS
CREATE OR ALTER PROCEDURE SP_DELETE_CLIENT_BY_ID( 
	@clientId INT, 
	@clientStatus CHAR(1) 
)
AS
BEGIN
	UPDATE [dbo].[Client] SET clientStatus = @clientStatus WHERE clientId = @clientId;
END;

-- REGISTRAR UN CLIENTE NUEVO
CREATE OR ALTER PROCEDURE SP_INSERT_CLIENT( 
	@enterpriseId INT,
	@clientName VARCHAR(100),
	@clientRUC VARCHAR(50),
	@clientPhone VARCHAR(30),
	@clientAddress VARCHAR(150),
	@clientEmail VARCHAR(80)
)
AS
BEGIN
	INSERT INTO [dbo].[Client]
	( 
		enterpriseId,
		clientName,
		clientRUC,
		clientPhone,
		clientAddress,
		clientEmail,
		clientCreatedAt,
		clientStatus
	)
	VALUES
	( 
		@enterpriseId,
		@clientName,
		@clientRUC,
		@clientPhone,
		@clientAddress,
		@clientEmail,
		GETDATE(), 
		'S'
	);
END;

-- ACTUALIZAR UN CLIENTE
CREATE OR ALTER PROCEDURE SP_MODIFY_CLIENT(
	@clientId INT,
	@enterpriseId INT,
	@clientName VARCHAR(100),
	@clientRUC VARCHAR(50),
	@clientPhone VARCHAR(30),
	@clientAddress VARCHAR(150),
	@clientEmail VARCHAR(80)
)
AS
BEGIN
	UPDATE [dbo].[Client] SET
		enterpriseId = @enterpriseId,
		clientName = @clientName,
		clientRUC = @clientRUC,
		clientPhone = @clientPhone,
		clientAddress = @clientAddress,
		clientEmail = @clientEmail
	WHERE clientId = @clientId; 
END;







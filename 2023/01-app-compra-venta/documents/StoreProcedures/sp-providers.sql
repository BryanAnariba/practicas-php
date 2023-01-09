-- listar todas las PROVEEDORES
CREATE OR ALTER PROCEDURE SP_GET_PROVIDER(
    @enterpriseId INT
)
AS
BEGIN
    SELECT 
		[dbo].[Provider].providerId, 
		[dbo].[Provider].enterpriseId,
		Enterprise.enterpriseName,
		[dbo].[Provider].providerName,
		[dbo].[Provider].providerRUC,
		[dbo].[Provider].providerPhone,
		[dbo].[Provider].providerAddress,
		[dbo].[Provider].providerEmail,
		[dbo].[Provider].providerCreatedAt,
		[dbo].[Provider].providerStatus
	FROM 
	Provider INNER JOIN Enterprise 
	ON ( Provider.enterpriseId = Enterprise.enterpriseId )
	WHERE [dbo].[Provider].enterpriseId = @enterpriseId;
END;

-- OBTENER EL PROVEEDORES POR ID
CREATE OR ALTER PROCEDURE SP_GET_PROVIDER_BY_ID( 
	@providerId INT 
)
AS
BEGIN
	SELECT 
		[dbo].[Provider].providerId, 
		[dbo].[Provider].enterpriseId,
		Enterprise.enterpriseName,
		[dbo].[Provider].providerName,
		[dbo].[Provider].providerRUC,
		[dbo].[Provider].providerPhone,
		[dbo].[Provider].providerAddress,
		[dbo].[Provider].providerEmail,
		[dbo].[Provider].providerCreatedAt,
		[dbo].[Provider].providerStatus
	FROM 
	[dbo].[Provider] INNER JOIN Enterprise 
	ON ( Provider.enterpriseId = Enterprise.enterpriseId )
	WHERE providerId = @providerId;
END;

-- ELIMINAR REGISTRO DE PROVEEDORES OJO SOLO CAMBIAR STATUS
CREATE OR ALTER PROCEDURE SP_DELETE_PROVIDER_BY_ID( 
	@providerId INT, 
	@providerStatus CHAR(1) 
)
AS
BEGIN
	UPDATE [dbo].[Provider] SET providerStatus = @providerStatus WHERE providerId = @providerId;
END;

-- REGISTRAR UN PRODUCTO NUEVO
CREATE OR ALTER PROCEDURE SP_INSERT_PROVIDER( 
	@enterpriseId INT,
	@providerRUC INT,
	@providerName VARCHAR(150),
	@providerPhone VARCHAR(50),
	@providerAddress VARCHAR(150),
	@providerEmail VARCHAR(80)
)
AS
BEGIN
	INSERT INTO [dbo].[Provider]
	( 
		enterpriseId,
		providerRUC,
		providerPhone,
		providerAddress,
		providerEmail,
		providerCreatedAt,
		providerStatus,
		providerName
	)
	VALUES
	( 
		@enterpriseId,
		@providerRUC,
		@providerPhone,
		@providerAddress,
		@providerEmail,
		GETDATE(), 
		'S',
		@providerName
	);
END;

-- ACTUALIZAR UN PROVEEDOR
CREATE OR ALTER PROCEDURE SP_MODIFY_PROVIDER(
	@providerId INT,
	@enterpriseId INT,
	@providerRUC INT,
	@providerPhone VARCHAR(50),
	@providerAddress VARCHAR(150),
	@providerEmail VARCHAR(80),
	@providerName VARCHAR(150)
)
AS
BEGIN
	UPDATE [dbo].[Provider] SET
		enterpriseId = @enterpriseId,
		providerRUC = @providerRUC,
		providerPhone = @providerPhone,
		providerAddress = @providerAddress,
		providerEmail = @providerEmail,
		providerName = @providerName
	WHERE providerId = @providerId; 
END;
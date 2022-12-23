-- LISTAR TODAS LAS COMPANIAS
CREATE OR ALTER PROCEDURE SP_GET_ENTERPRISES
(
	@companyId INT,
	@enterpriseStatus CHAR(1)
)
AS
BEGIN
    SELECT * FROM [dbo].[Enterprise] 
	WHERE 
		enterpriseStatus = @enterpriseStatus 
		AND
		companyId = @companyId;
END;

-- OBTENER LA COMPANIA POR ID
CREATE OR ALTER PROCEDURE SP_GET_ENTERPRISE_BY_ID( 
	@companyId INT 
)
AS
BEGIN
	SELECT * FROM [dbo].[Enterprise] WHERE companyId = @companyId;
END;

-- ELIMINAR REGISTRO COMPANIA OJO SOLO CAMBIAR STATUS
CREATE OR ALTER PROCEDURE SP_DELETE_ENTERPRISE_BY_ID( 
	@enterpriseId INT, 
	@enterpriseStatus CHAR(1) 
)
AS
BEGIN
	UPDATE [dbo].[Enterprise] SET enterpriseStatus = @enterpriseStatus WHERE enterpriseId = @enterpriseId;
END;

-- REGISTRAR UNA COMPANIA NUEVA
CREATE OR ALTER PROCEDURE SP_INSERT_ENTERPRISE(
	@companyId INT, 
	@enterpriseName VARCHAR(150), 
	@enterpriceRUC VARCHAR(50)
)
AS
BEGIN
	INSERT INTO [dbo].[Enterprise] 
	( 
		companyId, 
		enterpriseName, 
		enterpriceRUC,
		enterpriseStatus,
		enterpriseCreatedAt
	)
	VALUES
	( 
		@companyId, 
		@enterpriseName,
		@enterpriceRUC,
		GETDATE(), 
		'S'
	);
END;

-- ACTUALIZAR UNA COMPANIA
CREATE OR ALTER PROCEDURE SP_MODIFY_ENTERPRISE(
	@enterpriseId INT,
	@companyId INT, 
	@enterpriseName VARCHAR(150), 
	@enterpriceRUC VARCHAR(50)
)
AS
BEGIN
	UPDATE [dbo].[Enterprise] SET companyId = @companyId, enterpriseName = @enterpriseName, enterpriceRUC = @enterpriceRUC WHERE enterpriseId = @enterpriseId
END;


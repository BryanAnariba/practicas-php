-- LISTAR TODAS LAS COMPANIAS
CREATE OR ALTER PROCEDURE SP_GET_COMPANIES
AS
BEGIN
    SELECT * FROM [dbo].[Company] WHERE companyStatus = 'S';
END;

-- OBTENER LA COMPANIA POR ID
CREATE OR ALTER PROCEDURE SP_GET_COMPANY_BY_ID( 
	@companyId INT 
)
AS
BEGIN
	SELECT * FROM [dbo].[Company] WHERE companyId = @companyId;
END;

-- ELIMINAR REGISTRO COMPANIA OJO SOLO CAMBIAR STATUS
CREATE OR ALTER PROCEDURE SP_DELETE_COMPANY_BY_ID( 
	@companyId INT, 
	@companyStatus CHAR(1) 
)
AS
BEGIN
	UPDATE [dbo].[Company] SET companyStatus = @companyStatus WHERE companyId = @companyId;
END;

-- REGISTRAR UNA COMPANIA NUEVA
CREATE OR ALTER PROCEDURE SP_INSERT_COMPANY(
	@companyName VARCHAR(150)
)
AS
BEGIN
	INSERT INTO [dbo].[Company] 
	( 
		companyName, 
		companyCreatedAt, 
		companyStatus
	)
	VALUES
	( 
		@companyName, 
		GETDATE(), 
		'S'
	);
END;

-- ACTUALIZAR UNA COMPANIA
CREATE OR ALTER PROCEDURE SP_MODIFY_COMPANY(
	@companyId INT,
	@companyName VARCHAR(150)
)
AS
BEGIN
	UPDATE [dbo].[Company] SET
		companyName = @companyName
	WHERE
		companyId = @companyId;
END;


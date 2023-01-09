-- listar todas los roles por sucursal
CREATE OR ALTER PROCEDURE SP_GET_ROLES(
    @branchOfficeId INT
)
AS
BEGIN
    SELECT * FROM [dbo].[Role] WHERE branchOfficeId = @branchOfficeId;
END;

-- OBTENER EL ROLE POR ID
CREATE OR ALTER PROCEDURE SP_GET_ROLES_BY_ID( 
	@roleId INT 
)
AS
BEGIN
	SELECT * FROM [dbo].[Role] WHERE roleId = @roleId;
END;

-- ELIMINAR REGISTRO ROLE OJO SOLO CAMBIAR STATUS
CREATE OR ALTER PROCEDURE SP_DELETE_ROLE_BY_ID( 
	@roleId INT, 
	@roleStatus CHAR(1) 
)
AS
BEGIN
	UPDATE [dbo].[Role] SET roleStatus = @roleStatus WHERE roleId = @roleId;
END;

-- REGISTRAR UN ROLE NUEVA
CREATE OR ALTER PROCEDURE SP_INSERT_ROLE(
	@branchOfficeId INT,
	@roleName VARCHAR(50)
)
AS
BEGIN
	INSERT INTO [dbo].[Role] 
	( 
		branchOfficeId, 
		roleName, 
		roleCreatedAt, 
		roleStatus 
	)
	VALUES
	( 
		@branchOfficeId, 
		@roleName, 
		GETDATE(), 
		'S'
	);
END;

-- ACTUALIZAR UN ROLE
CREATE OR ALTER PROCEDURE SP_MODIFY_ROLE(
	@roleId INT,
	@branchOfficeId INT,
	@roleName VARCHAR(50)
)
AS
BEGIN
	UPDATE [dbo].[Role] SET
		branchOfficeId = @branchOfficeId,
		roleName = @roleName
	WHERE
		roleId = @roleId;
END;


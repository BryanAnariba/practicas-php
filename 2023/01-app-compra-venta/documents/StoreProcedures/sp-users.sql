-- OBTENER USUARIOS
CREATE OR ALTER PROCEDURE SP_GET_USERS(
    @branchOfficeId INT
)
AS
BEGIN
	SELECT 
		[dbo].[User].userId,
		[dbo].[User].userFirstName,
		[dbo].[User].userLastName,
		[dbo].[User].userEmail,
		[dbo].[User].userIdentity,
		[dbo].[User].branchOfficeId,
		[dbo].[BranchOffice].branchOfficeName,
		[dbo].[User].roleId,
		[dbo].[Role].roleName,
		[dbo].[User].userPhone,
		[dbo].[User].userStatus,
		[dbo].[User].userCreatedAt
		FROM [dbo].[User] 
		INNER JOIN [dbo].[BranchOffice]
		ON ( [dbo].[User].branchOfficeId = [dbo].[BranchOffice].branchOfficeId )
		INNER JOIN [dbo].[Role]
		ON ( [dbo].[User].roleId = [dbo].[Role].roleId )
		WHERE [dbo].[User].branchOfficeId = @branchOfficeId;

END;

-- OBTENER USUARIOS POR ID
CREATE OR ALTER PROCEDURE SP_GET_USER_BY_ID( 
	@userId INT 
)
AS
BEGIN
	SELECT 
		[dbo].[User].userId,
		[dbo].[User].userFirstName,
		[dbo].[User].userLastName,
		[dbo].[User].userEmail,
		[dbo].[User].userIdentity,
		[dbo].[User].branchOfficeId,
		[dbo].[BranchOffice].branchOfficeName,
		[dbo].[User].roleId,
		[dbo].[Role].roleName,
		[dbo].[User].userPhone,
		[dbo].[User].userStatus,
		[dbo].[User].userCreatedAt
		FROM [dbo].[User] 
		INNER JOIN [dbo].[BranchOffice]
		ON ( [dbo].[User].branchOfficeId = [dbo].[BranchOffice].branchOfficeId )
		INNER JOIN [dbo].[Role]
		ON ( [dbo].[User].roleId = [dbo].[Role].roleId )
		WHERE [dbo].[User].userId = @userId;
END;

-- ELIMINAR REGISTRO DE USUARIOS, SOLO CAMBIAMOS EL ESTADO
CREATE OR ALTER PROCEDURE SP_DELETE_USER_BY_ID( 
	@userId INT, 
	@userStatus CHAR(1) 
)
AS
BEGIN
	UPDATE [dbo].[User] SET userStatus = @userStatus WHERE userId = @userId;
END;

-- REGISTRAR USUARIOS
CREATE OR ALTER PROCEDURE SP_INSERT_USER(
	@userFirstName VARCHAR(80),
	@userLastName VARCHAR(80),
	@userEmail VARCHAR(80),
	@userPassword VARCHAR(255),
	@userIdentity VARCHAR(30),
	@branchOfficeId INT,
	@roleId INT,
	@userPhone VARCHAR(30)
)
AS
BEGIN
	INSERT INTO [dbo].[User]
	( 
		userFirstName,
		userLastName,
		userEmail,
		userPassword,
		userIdentity,
		branchOfficeId,
		roleId,
		userPhone,
		userStatus,
		userCreatedAt
	)
	VALUES
	( 
		@userFirstName,
		@userLastName,
		@userEmail,
		@userPassword,
		@userIdentity,
		@branchOfficeId,
		@roleId,
		@userPhone,
		GETDATE(), 
		'S'
	);
END;

-- ACTUALIZAR USUARIOS
CREATE OR ALTER PROCEDURE SP_MODIFY_USERS(
	@userId INT,
	@userFirstName VARCHAR(80),
	@userLastName VARCHAR(80),
	@userEmail VARCHAR(80),
	@userPassword VARCHAR(255),
	@userIdentity VARCHAR(30),
	@branchOfficeId INT,
	@roleId INT,
	@userPhone VARCHAR(30)
)
AS
BEGIN
	UPDATE [dbo].[User] SET
		userFirstName = @userFirstName,
		userLastName = @userLastName,
		userEmail = @userEmail,
		userPassword = @userPassword,
		userIdentity = @userIdentity,
		branchOfficeId = @branchOfficeId,
		roleId = @roleId,
		userPhone = @userPhone
	WHERE
		@userId = @userId;
END;



-- OBTENER USUARIOS
CREATE OR ALTER PROCEDURE SP_LOGIN_USER(
	@userEmail VARCHAR(80),
	@userPassword VARCHAR(255)
)
AS
BEGIN
	SELECT * FROM [dbo].[User] 
	WHERE 
		userEmail = @userEmail 
		AND
		userPassword = @userPassword;
END;

-- CAMBIO DE CLAVE -> a mi parecer debe restablecerse por correo enviando la nueva clave
CREATE OR ALTER PROCEDURE SP_CHANGE_PASSWORD(
	@userId INT,
	@userPassword VARCHAR(255)
)
AS
BEGIN
	UPDATE [dbo].[User] SET
		userPassword = @userPassword
	WHERE
		@userId = @userId;
END;

-- OBTENER SUCURSALES UNA DE EMPRESA
CREATE OR ALTER PROCEDURE SP_GET_BRANCHOFFICES(
    @enterpriseId INT
)
AS
BEGIN
    SELECT 
		BranchOffice.branchOfficeId, 
		BranchOffice.branchOfficeName, 
		BranchOffice.enterpriseId, 
		Enterprise.enterpriseName, 
		BranchOffice.branchOfficeCreatedAt, 
		BranchOffice.branchOfficeStatus
	FROM BranchOffice INNER JOIN Enterprise
	ON ( BranchOffice.enterpriseId = Enterprise.enterpriseId )
	WHERE BranchOffice.enterpriseId = @enterpriseId
END;

-- OBTENER LA SUCURSAL POR ID
CREATE OR ALTER PROCEDURE SP_GET_BRANCHOFFICE_BY_ID( 
	@branchOfficeId INT 
)
AS
BEGIN
	SELECT 
		BranchOffice.branchOfficeId, 
		BranchOffice.branchOfficeName, 
		BranchOffice.enterpriseId, 
		Enterprise.enterpriseName, 
		BranchOffice.branchOfficeCreatedAt, 
		BranchOffice.branchOfficeStatus
	FROM BranchOffice INNER JOIN Enterprise
	ON ( BranchOffice.enterpriseId = Enterprise.enterpriseId )
	WHERE BranchOffice.branchOfficeId = @branchOfficeId
END;

-- ELIMINAR REGISTRO DE SUCURSAL, SOLO CAMBIAMOS EL ESTADO
CREATE OR ALTER PROCEDURE SP_DELETE_BRANCHOFFICE_BY_ID( 
	@branchOfficeId INT, 
	@branchOfficeStatus CHAR(1) 
)
AS
BEGIN
	UPDATE BranchOffice SET branchOfficeStatus = @branchOfficeStatus WHERE branchOfficeId = @branchOfficeId;
END;

-- REGISTRAR UNA UNIDAD DE MEDIDA NUEVA
CREATE OR ALTER PROCEDURE SP_INSERT_BRANCHOFFICE(
	@branchOfficeName VARCHAR(150), 
	@enterpriseId INT
)
AS
BEGIN
	INSERT INTO BranchOffice 
	( 
		branchOfficeName, 
		enterpriseId,
		branchOfficeCreatedAt, 
		branchOfficeStatus
	)
	VALUES
	( 
		@branchOfficeName, 
		@enterpriseId, 
		GETDATE(), 
		'S'
	);
END;

-- ACTUALIZAR UNA UNIDAD DE MEDIDA
CREATE OR ALTER PROCEDURE SP_MODIFY_BRANCHOFFICE(
	@branchOfficeId INT,
	@branchOfficeName VARCHAR(150), 
	@enterpriseId INT
)
AS
BEGIN
	UPDATE BranchOffice SET
		branchOfficeName = @branchOfficeName,
		enterpriseId = @enterpriseId
	WHERE
		branchOfficeId = @branchOfficeId;
END;
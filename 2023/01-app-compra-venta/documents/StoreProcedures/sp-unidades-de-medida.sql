-- listar todas las UNIDAD DE MEDIDA
CREATE OR ALTER PROCEDURE SP_GET_UNITMEASUREMENT(
    @branchOfficeId INT
)
AS
BEGIN
    SELECT * FROM UnitOfMeasurement WHERE branchOfficeId = @branchOfficeId;
END;

-- OBTENER LA UNIDAD DE MEDIDA POR ID
CREATE OR ALTER PROCEDURE SP_GET_UNITMEASUREMENT_BY_ID( 
	@unitMeasurementId INT 
)
AS
BEGIN
	SELECT * FROM UnitOfMeasurement WHERE unitMeasurementId = @unitMeasurementId
END;

-- ELIMINAR REGISTRO UNIDAD DE MEDIDA OJO SOLO CAMBIAR STATUS
CREATE OR ALTER PROCEDURE SP_DELETE_UNITMEASUREMENT_BY_ID( 
	@unitMeasurementId INT, 
	@unitMeasurementStatus CHAR(1) 
)
AS
BEGIN
	UPDATE UnitOfMeasurement SET unitMeasurementStatus = @unitMeasurementStatus WHERE unitMeasurementId = @unitMeasurementId;
END;

-- REGISTRAR UNA UNIDAD DE MEDIDA NUEVA
CREATE OR ALTER PROCEDURE SP_INSERT_UNITMEASUREMENT(
	@branchOfficeId INT,
	@unitMeasurementName VARCHAR(50)
)
AS
BEGIN
	INSERT INTO UnitOfMeasurement 
	( 
		branchOfficeId, 
		unitMeasurementName, 
		unitMeasurementCreatedAt, 
		unitMeasurementStatus 
	)
	VALUES
	( 
		@branchOfficeId, 
		@unitMeasurementName, 
		GETDATE(), 
		'S'
	);
END;

-- ACTUALIZAR UNA UNIDAD DE MEDIDA
CREATE OR ALTER PROCEDURE SP_MODIFY_UNITMEASUREMENT(
	@unitMeasurementId INT,
	@branchOfficeId INT,
	@unitMeasurementName VARCHAR(50)
)
AS
BEGIN
	UPDATE UnitOfMeasurement SET
		branchOfficeId = @branchOfficeId,
		unitMeasurementName = @unitMeasurementName
	WHERE
		unitMeasurementId = @unitMeasurementId;
END;
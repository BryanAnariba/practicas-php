
---------------------------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------- PROCEDIMIENTOS PARA CATEGORY ------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------------------------------
-- listar todas las categorias por sucursal
--EXEC SP_GET_CATEGORIES 1
CREATE OR ALTER PROCEDURE SP_GET_CATEGORIES(
    @branchOfficeId INT
)
AS
BEGIN
    SELECT * FROM Category WHERE branchOfficeId = @branchOfficeId;
END;

-- OBTENER LA CATEGORIA POR ID
--EXEC SP_GET_CATEGORY_BY_ID 1
CREATE OR ALTER PROCEDURE SP_GET_CATEGORY_BY_ID( 
	@categoryId INT 
)
AS
BEGIN
	SELECT * FROM Category WHERE categoryId = @categoryId;
END;

-- ELIMINAR REGISTRO CATEGORIA OJO SOLO CAMBIAR STATUS
--EXEC SP_DELETE_CATEGORY_BY_ID 1, 'N'
CREATE OR ALTER PROCEDURE SP_DELETE_CATEGORY_BY_ID( 
	@categoryId INT, 
	@categoryStatus CHAR(1) 
)
AS
BEGIN
	UPDATE Category SET categoryStatus = @categoryStatus WHERE categoryId = @categoryId;
END;

-- REGISTRAR UNA CATEGORIA NUEVA
CREATE OR ALTER PROCEDURE SP_INSERT_CATEGORY(
	@branchOfficeId INT,
	@categoryName VARCHAR(150)
)
AS
BEGIN
	INSERT INTO Category 
	( 
		branchOfficeId, 
		categoryName, 
		categoryCreatedAt, 
		categoryStatus 
	)
	VALUES
	( 
		@branchOfficeId, 
		@categoryName, 
		GETDATE(), 
		'S'
	);
END;

-- ACTUALIZAR UNA CATEGORIA
CREATE OR ALTER PROCEDURE SP_MODIFY_CATEGORY(
	@categoryId INT,
	@branchOfficeId INT,
	@categoryName VARCHAR(150)
)
AS
BEGIN
	UPDATE Category SET
		branchOfficeId = @branchOfficeId,
		categoryName = @categoryName
	WHERE
		categoryId = @categoryId;
END;


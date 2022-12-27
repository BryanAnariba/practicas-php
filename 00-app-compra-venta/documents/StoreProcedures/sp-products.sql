-- listar todas las PRODUCTOS
CREATE OR ALTER PROCEDURE SP_GET_PRODUCTS(
    @branchOfficeId INT
)
AS
BEGIN
    SELECT * FROM Product WHERE branchOfficeId = @branchOfficeId;
END;

-- OBTENER EL PRODUCTO POR ID
CREATE OR ALTER PROCEDURE SP_GET_PRODUCT_BY_ID( 
	@productId INT 
)
AS
BEGIN
	SELECT * FROM Product WHERE productId = @productId
END;

-- ELIMINAR REGISTRO UNIDAD DE PRODUCTO OJO SOLO CAMBIAR STATUS
CREATE OR ALTER PROCEDURE SP_DELETE_PRODUCT_BY_ID( 
	@productId INT, 
	@productStatus CHAR(1) 
)
AS
BEGIN
	UPDATE Product SET productStatus = @productStatus WHERE productId = @productId;
END;

-- REGISTRAR UN PRODUCTO NUEVO
CREATE OR ALTER PROCEDURE SP_INSERT_PRODUCT(
	@branchOfficeId INT,
	@categoryId INT,
	@unitMeasurementId INT,
	@coinId INT,
	@productName VARCHAR(150),
	@productDescription VARCHAR(150),
	@productSellPrice NUMERIC(18,2),
	@productBuyPrice NUMERIC(18,2),
	@productStock INT,
	@productExpirationDate DATETIME,
	@productImg VARCHAR(MAX)
)
AS
BEGIN
	INSERT INTO Product 
	( 
		branchOfficeId, 
		categoryId, 
		unitMeasurementId, 
		coinId, 
		productName, 
		productDescription, 
		productSellPrice, 
		productBuyPrice, 
		productStock, 
		productExpirationDate, 
		productImg, 
		productCreatedAt, 
		productStatus
	)
	VALUES
	( 
		@branchOfficeId,
		@categoryId,
		@unitMeasurementId,
		@coinId,
		@productName,
		@productDescription,
		@productSellPrice,
		@productBuyPrice,
		@productStock,
		@productExpirationDate,
		@productImg,
		GETDATE(), 
		'S'
	);
END;

-- ACTUALIZAR UN PRODUCTO
CREATE OR ALTER PROCEDURE SP_MODIFY_PRODUCT(
	@productId INT,
	@branchOfficeId INT,
	@categoryId INT,
	@unitMeasurementId INT,
	@coinId INT,
	@productName VARCHAR(150),
	@productDescription VARCHAR(150),
	@productSellPrice NUMERIC(18,2),
	@productBuyPrice NUMERIC(18,2),
	@productStock INT,
	@productExpirationDate DATETIME,
	@productImg VARCHAR(MAX)
)
AS
BEGIN
	UPDATE Product SET
		branchOfficeId = @branchOfficeId,
		categoryId = @categoryId,
		unitMeasurementId = @unitMeasurementId,
		coinId = @coinId,
		productName = @productName,
		productDescription = @productDescription,
		productSellPrice = @productSellPrice,
		productBuyPrice = @productBuyPrice,
		productStock = @productStock,
		productExpirationDate = @productExpirationDate,
		productImg = @productImg
	WHERE
		productId = @productId;
END;
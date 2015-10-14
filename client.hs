import Network.HTTP

get :: IO String
get = do 
    -- Ask for message from console
    putStrLn "Enter a message: "
    msg <- getLine
    -- Perform HTTP request with the GET request details
    simpleHTTP (req msg) >>= getResponseBody
    -- Construct a request with the URI and user message
    where req msg = getRequest ("http://localhost:8000/echo.php?message=" ++ msg)
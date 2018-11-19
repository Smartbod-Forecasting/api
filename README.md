# API - public information
This readme explaines the working behind the Smartbod api. The api can be accessed at https://api.smartbod.energy

# API Key
An API key is required in each request to validate who you are. A test API can be requested at the website www.smartbod.energy or by email via at promotion@smartbod.energy

# Forcast locations
Each API key provides access to one or more forecasts locations

# Forcaste types
The following forecasts are available:
- Solar production
- Wind production
- Energy demand

# Sending data to the API
Your forcasts can be retrieved by making a GET requist to https://api.smartbod.energy?key=your_key
The return has json in the body. The structure of the forecast is in json output:
- forecasts => array with arrays for each of your forecasts:
- forecast => array with:
- prediction_id = internal id
- prediction_description = string, for example "Solar Nederland"
- installed_capacity = Maximum power of the system in Watt [W]
- forecasts => array with forecasts for each 15 minute interval for 48 hours ahead:
- forecast = forecast value in W
- datetimeFC = datetime string in UTC with timezone stamp like: "YYYY-mm-ddThh:ii:ss+0200"

# Sending data to the API
To send data the our server, we require a POST to https://api.smartbod.energy?key=your_key
The body of the post has to be in the json as the retrieved forecasts, without the prediction_id. To send data for a new systems, provide a new 'prediction_description' and your data will automatically be logged. You can post data back in time. The more data we retrieve of your local system, the better the forecast will be.

# Updating the system location
Updating the location for a system is currently not possible via our API. Please send changes to support@smartbod.energy
Please provide your:
- API_key
- prediction_description
- latitude
- longitude
 

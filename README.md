# GreenArrow API Study Project
This project is built with Symfony to study and interact with GreenArrow's mailing domain services API. The project includes services and controllers for exploring and testing all available GreenArrow API endpoints. 

## Project Overview

The objective of this project is to develop a comprehensive understanding of GreenArrow's API, specifically focusing on mailing domain services, including DKIM keys management, domain monitoring, and more. 

## Prerequisites
- **PHP** 8.1 or higher
- **Composer** for dependency management
- **Symfony** CLI (optional for easier project management)
- **GreenArrow API Credentials** (username and password)

## Installation
1. Clone the repository:
    ```bash
    git clone https://github.com/JawherKl/greenarrow-api-study.git
    cd greenarrow-api-study
    ```

2. Install dependencies:

    ```bash
    composer install
    ```

3. Configure environment variables:

    Rename `.env.example` to `.env` and add your GreenArrow API credentials.

    ```plaintext
    GREENARROW_API_URL=http://your_domain.com/ga/api/v3/eng/
    GREENARROW_API_USER=your_api_username
    GREENARROW_API_PASSWORD=your_api_password
    ```

4. Start the Symfony server:

    ```bash
    symfony server:start
    ```

    Alternatively, if you don't have Symfony CLI, you can use:

    ```bash
    php -S localhost:8000 -t public
    ```

## Usage
### Available Endpoints

The project includes API endpoints to retrieve and manage GreenArrow's mailing domain services data:

1. **DKIM Keys**: Retrieve DKIM keys for specific domains.
    - **URL**: `/greenarrow/dkim_keys`

2. **Domain Monitoring**: Monitor domain status for mailing compliance.
    - **URL**: `/greenarrow/domain_monitoring`

Each endpoint connects with the GreenArrow API through a service layer that manages the API calls and responses.

### Example Request
To fetch DKIM keys, make a GET request to:
```plaintext
http://localhost:8000/greenarrow/dkim_keys
```

## Project Structure

- **Controller**: Contains the controllers to handle API requests.
- **Service**: Manages API calls to GreenArrow's endpoints.
- **Configuration**: `.env` file stores GreenArrow API credentials and endpoint URL.

## Testing

You can test the project by sending requests to the local server's endpoints using a tool like [Postman](https://www.postman.com/) or `curl`.

Example with `curl`:

```bash
curl -X GET http://localhost:8000/greenarrow/dkim_keys
```

## Contributing

Contributions are welcome! Please open an issue or submit a pull request for any improvements or additional features.

## License

This project is licensed under the MIT License.

### Tips:
- Update `your-username` in the git URL if you intend to publish this to GitHub.
- Customize the `GREENARROW_API_URL` if your GreenArrow instance URL differs.

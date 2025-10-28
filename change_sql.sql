
CREATE TABLE tbl_packages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fk_category_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    package_type VARCHAR(100) DEFAULT NULL,           -- e.g., "Super Deluxe", "Economy", etc.
    duration VARCHAR(50) DEFAULT NULL,                -- e.g., "43 Days" or "15 Days"
    departure_date VARCHAR(100) DEFAULT NULL,         -- e.g., "18 May - 23 May 2026"
    from_location VARCHAR(100) DEFAULT NULL,          -- e.g., "Mumbai"
    makkah_hotel VARCHAR(150) DEFAULT NULL,
    madinah_hotel VARCHAR(150) DEFAULT NULL,
    meals VARCHAR(255) DEFAULT NULL,                  -- e.g., "Indian Cuisine (Breakfast, Lunch, Dinner)"
    transport VARCHAR(255) DEFAULT NULL,              -- e.g., "A/C Buses"
    visa_flight_info VARCHAR(255) DEFAULT NULL,       -- e.g., "Round Trip + Umrah Visa"
    price_quint DECIMAL(10,2) DEFAULT NULL,           -- 5 beds
    price_quad DECIMAL(10,2) DEFAULT NULL,            -- 4 beds
    price_triple DECIMAL(10,2) DEFAULT NULL,          -- 3 beds
    price_twin DECIMAL(10,2) DEFAULT NULL,            -- 2 beds
    image_url VARCHAR(255) DEFAULT NULL,
    label VARCHAR(50) DEFAULT NULL,                   -- "New", "Popular", etc.
    slug VARCHAR(150) UNIQUE,
    status ENUM('Active', 'Inactive') DEFAULT 'Active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (fk_category_id) REFERENCES tbl_package_category(id) ON DELETE CASCADE
);

CREATE TABLE tbl_package_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fk_package_id INT NOT NULL,
    short_description TEXT DEFAULT NULL,
    description LONGTEXT DEFAULT NULL,         -- Full package overview
    inclusions LONGTEXT DEFAULT NULL,          -- Stored as HTML list or text
    exclusions LONGTEXT DEFAULT NULL,          -- Stored as HTML list or text
    itinerary LONGTEXT DEFAULT NULL,           -- Daily details or summarized version
    terms_conditions LONGTEXT DEFAULT NULL,    -- Optional new field
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (fk_package_id) REFERENCES tbl_packages(id) ON DELETE CASCADE
);

CREATE TABLE tbl_package_itineraries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fk_package_id INT NOT NULL,
    day_label VARCHAR(50),              -- e.g. "Day 01 – 06"
    title VARCHAR(255),                 -- e.g. "Departure & Arrival in Makkah (Shifting Stay)"
    details TEXT,                       -- detailed description
    day_order INT DEFAULT 0,            -- for sorting
    FOREIGN KEY (fk_package_id) REFERENCES tbl_packages(id) ON DELETE CASCADE
);

CREATE TABLE tbl_contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(150) NOT NULL, 
    email VARCHAR(150) NOT NULL, 
    phone VARCHAR(20) NOT NULL, 
    message TEXT NOT NULL, 
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE tbl_callback_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    message TEXT DEFAULT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE tbl_hajj_enquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    city VARCHAR(100) NOT NULL,
    nationality VARCHAR(100) NOT NULL,
    package_type VARCHAR(100) NOT NULL,
    number_of_days VARCHAR(50) NOT NULL,
    group_size INT DEFAULT 1,
    departure_city VARCHAR(100) NOT NULL,
    help_required TEXT DEFAULT NULL,          -- store selected help options (comma-separated or JSON)
    referred_by VARCHAR(100) NOT NULL,
    privacy_policy TINYINT(1) DEFAULT 0,      -- 1 = agreed, 0 = not agreed
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
# STFQ WP Iframe
**STFQ WP Iframe** is a versatile tool for WordPress that allows users to embed customizable iframes into their posts and pages using a simple shortcode. This plugin offers a range of features to ensure flexibility, responsiveness, and security.

**Key Features:**

1. **Customizable Width and Height:**
   - Users can specify the `width` and `height` attributes to control the dimensions of the iframe.

2. **Responsive Iframes:**
   - The iframe is wrapped in a div with CSS styles to maintain a responsive aspect ratio, ensuring the iframe adjusts to different screen sizes.

3. **Security Features:**
   - The plugin includes a whitelist of allowed domains to prevent embedding potentially harmful sites.
   - The `sandbox` attribute can be specified to restrict the iframe's capabilities for added security.

4. **Lazy Loading:**
   - The iframe includes the `loading="lazy"` attribute, which defers loading of the iframe until it is near the viewport, improving page load performance.

5. **Error Handling:**
   - Provides user-friendly error messages if no URL is provided or if the URL is not from an allowed domain.

**Usage:**

To embed an iframe, use the following shortcode in your WordPress post or page:

```plaintext
[custom_iframe url="https://example.com" width="800" height="600" sandbox="allow-same-origin allow-scripts"]
```

**Shortcode Attributes:**

- `url`: The URL of the page to be embedded in the iframe.
- `width`: (Optional) The width of the iframe (default is 600).
- `height`: (Optional) The height of the iframe (default is 400).
- `sandbox`: (Optional) Specifies the sandboxing rules for the iframe content.

**Example:**

```plaintext
[custom_iframe url="https://example.com" width="800" height="600" sandbox="allow-same-origin allow-scripts"]
```

---

## How To Use STFQ WP Iframe

### STFQ WP Iframe Plugin Instructions

#### Description
The **STFQ WP Iframe** plugin allows users to embed customizable iframes into WordPress posts and pages using a shortcode. This plugin provides flexibility, responsiveness, and security features to ensure a seamless embedding experience.

#### Features
1. Customizable width and height.
2. Responsive iframes.
3. Security with domain whitelisting.
4. Lazy loading for better performance.
5. Error handling for user-friendly messages.
6. Sandbox attribute for enhanced security.

#### Installation
1. **Download the Plugin:**
   - Download the STFQ WP Iframe plugin zip file.

2. **Upload to WordPress:**
   - Navigate to your WordPress dashboard.
   - Go to **Plugins > Add New**.
   - Click **Upload Plugin** and choose the downloaded zip file.
   - Click **Install Now** and then **Activate** the plugin.

3. **Manual Installation:**
   - Unzip the downloaded plugin file.
   - Upload the extracted folder to the `/wp-content/plugins/` directory on your server.
   - Navigate to the **Plugins** menu in WordPress and activate the plugin.

#### Usage
To embed an iframe, use the following shortcode in your posts or pages:

```plaintext
[custom_iframe url="https://example.com" width="800" height="600" sandbox="allow-same-origin allow-scripts"]
```

#### Shortcode Attributes
- `url`: **(Required)** The URL of the page to be embedded in the iframe.
- `width`: **(Optional)** The width of the iframe (default is 600).
- `height`: **(Optional)** The height of the iframe (default is 400).
- `sandbox`: **(Optional)** Specifies the sandboxing rules for the iframe content.

#### Example
Here’s an example of how to use the shortcode with all attributes:

```plaintext
[custom_iframe url="https://example.com" width="800" height="600" sandbox="allow-same-origin allow-scripts"]
```

#### Allowed Domains
The plugin includes a commented whitelist of allowed domains to ensure security. By default, it allows the following domains:
- example.com
- anotherdomain.com

You can modify the list of allowed domains by editing the plugin code where the `$allowed_domains` array is defined; additionally, uncomment the line of code (remove the "/*" and "*/" around the line) to activate the feature:

```php
$allowed_domains = array('example.com', 'anotherdomain.com');
```

#### Error Handling
If the `url` attribute is not provided or if the URL is not from an allowed domain, the plugin will display a user-friendly error message.

#### License
This plugin is licensed under the GNU General Public License v3.0. For more details, see the [GPLv3 license](https://www.gnu.org/licenses/gpl-3.0.html).

This plugin is designed to be simple yet powerful, providing essential iframe embedding functionality while maintaining high standards of security and performance.

---

## Disclaimer

This WordPress plugin is provided without warranty. As the program is licensed free of charge, there is no warranty for the program, to the extent permitted by applicable law. The entire risk as to the quality and performance of the program is with you. Should the program prove defective, you assume the cost of all necessary servicing, repair, or correction.

In no event unless required by applicable law or agreed to in writing will the authors or copyright holders be liable to you for damages, including any general, special, incidental, or consequential damages arising out of the use or inability to use the program (including but not limited to loss of data or data being rendered inaccurate or losses sustained by you or third parties or a failure of the program to operate with any other programs), even if such holder or other party has been advised of the possibility of such damages.

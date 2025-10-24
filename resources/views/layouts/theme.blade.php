<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color System UI Components</title>
    <style>
        :root {
            /* Primary Colors */
            --primary-50: #EAEFFD;
            --primary-100: #D5DFFC;
            --primary-200: #AABFF8;
            --primary-300: #809FF5;
            --primary-400: #688BEF;
            --primary-500: #506EE4;
            --primary-600: #3A59C7;
            --primary-700: #2A45A3;
            --primary-800: #1D3280;
            --primary-900: #132366;

            /* Neutral Colors */
            --neutral-50: #F9FAFB;
            --neutral-100: #F3F4F6;
            --neutral-200: #E5E7EB;
            --neutral-300: #D1D5DB;
            --neutral-400: #9CA3AF;
            --neutral-500: #6B7280;
            --neutral-600: #4B5563;
            --neutral-700: #374151;
            --neutral-800: #1F2937;
            --neutral-900: #111827;

            /* Semantic Colors */
            --success: #10B981;
            --warning: #F59E0B;
            --error: #EF4444;
            --info: #506EE4;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--neutral-50);
            color: var(--neutral-800);
            line-height: 1.6;
            padding: 2rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        h1, h2, h3 {
            margin-bottom: 1rem;
            color: var(--neutral-900);
        }

        h1 {
            font-size: 2.5rem;
            border-bottom: 2px solid var(--neutral-200);
            padding-bottom: 0.5rem;
            margin-bottom: 2rem;
        }

        h2 {
            font-size: 1.8rem;
            margin-top: 2.5rem;
        }

        h3 {
            font-size: 1.4rem;
            margin-top: 1.5rem;
        }

        p {
            margin-bottom: 1.5rem;
        }

        .section {
            background: white;
            border-radius: 8px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .component-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 1.5rem;
        }

        .component-card {
            border: 1px solid var(--neutral-200);
            border-radius: 8px;
            padding: 1.5rem;
            background: white;
        }

        .component-title {
            font-weight: 600;
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        /* Button Styles */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.75rem 1.5rem;
            font-size: 0.95rem;
            font-weight: 600;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            text-decoration: none;
            margin: 0.5rem;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn:active {
            transform: translateY(0);
        }

        /* Primary Button Variants */
        .btn-primary {
            background-color: var(--primary-500);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-600);
        }

        .btn-primary-light {
            background-color: var(--primary-50);
            color: var(--primary-700);
            border: 1px solid var(--primary-200);
        }

        .btn-primary-light:hover {
            background-color: var(--primary-100);
        }

        .btn-primary-inverse {
            background-color: white;
            color: var(--primary-500);
            border: 1px solid var(--primary-500);
        }

        .btn-primary-inverse:hover {
            background-color: var(--primary-50);
        }

        /* Neutral Button Variants */
        .btn-neutral {
            background-color: var(--neutral-500);
            color: white;
        }

        .btn-neutral:hover {
            background-color: var(--neutral-600);
        }

        .btn-neutral-light {
            background-color: var(--neutral-100);
            color: var(--neutral-700);
            border: 1px solid var(--neutral-300);
        }

        .btn-neutral-light:hover {
            background-color: var(--neutral-200);
        }

        .btn-neutral-inverse {
            background-color: white;
            color: var(--neutral-700);
            border: 1px solid var(--neutral-500);
        }

        .btn-neutral-inverse:hover {
            background-color: var(--neutral-50);
        }

        /* Success Button Variants */
        .btn-success {
            background-color: var(--success);
            color: white;
        }

        .btn-success:hover {
            background-color: #0da271;
        }

        .btn-success-light {
            background-color: rgba(16, 185, 129, 0.1);
            color: var(--success);
            border: 1px solid rgba(16, 185, 129, 0.3);
        }

        .btn-success-light:hover {
            background-color: rgba(16, 185, 129, 0.2);
        }

        .btn-success-inverse {
            background-color: white;
            color: var(--success);
            border: 1px solid var(--success);
        }

        .btn-success-inverse:hover {
            background-color: rgba(16, 185, 129, 0.05);
        }

        /* Warning Button Variants */
        .btn-warning {
            background-color: var(--warning);
            color: white;
        }

        .btn-warning:hover {
            background-color: #e69507;
        }

        .btn-warning-light {
            background-color: rgba(245, 158, 11, 0.1);
            color: var(--warning);
            border: 1px solid rgba(245, 158, 11, 0.3);
        }

        .btn-warning-light:hover {
            background-color: rgba(245, 158, 11, 0.2);
        }

        .btn-warning-inverse {
            background-color: white;
            color: var(--warning);
            border: 1px solid var(--warning);
        }

        .btn-warning-inverse:hover {
            background-color: rgba(245, 158, 11, 0.05);
        }

        /* Error Button Variants */
        .btn-error {
            background-color: var(--error);
            color: white;
        }

        .btn-error:hover {
            background-color: #e03e3e;
        }

        .btn-error-light {
            background-color: rgba(239, 68, 68, 0.1);
            color: var(--error);
            border: 1px solid rgba(239, 68, 68, 0.3);
        }

        .btn-error-light:hover {
            background-color: rgba(239, 68, 68, 0.2);
        }

        .btn-error-inverse {
            background-color: white;
            color: var(--error);
            border: 1px solid var(--error);
        }

        .btn-error-inverse:hover {
            background-color: rgba(239, 68, 68, 0.05);
        }

        /* Info Button Variants */
        .btn-info {
            background-color: var(--info);
            color: white;
        }

        .btn-info:hover {
            background-color: #3f5bc9;
        }

        .btn-info-light {
            background-color: rgba(80, 110, 228, 0.1);
            color: var(--info);
            border: 1px solid rgba(80, 110, 228, 0.3);
        }

        .btn-info-light:hover {
            background-color: rgba(80, 110, 228, 0.2);
        }

        .btn-info-inverse {
            background-color: white;
            color: var(--info);
            border: 1px solid var(--info);
        }

        .btn-info-inverse:hover {
            background-color: rgba(80, 110, 228, 0.05);
        }

        /* Badge Styles */
        .badge {
            display: inline-flex;
            align-items: center;
            padding: 0.35rem 0.75rem;
            font-size: 0.75rem;
            font-weight: 600;
            border-radius: 9999px;
            margin: 0.25rem;
        }

        /* Primary Badge Variants */
        .badge-primary {
            background-color: var(--primary-500);
            color: white;
        }

        .badge-primary-light {
            background-color: var(--primary-50);
            color: var(--primary-700);
            border: 1px solid var(--primary-200);
        }

        .badge-primary-inverse {
            background-color: white;
            color: var(--primary-500);
            border: 1px solid var(--primary-500);
        }

        /* Neutral Badge Variants */
        .badge-neutral {
            background-color: var(--neutral-500);
            color: white;
        }

        .badge-neutral-light {
            background-color: var(--neutral-100);
            color: var(--neutral-700);
            border: 1px solid var(--neutral-300);
        }

        .badge-neutral-inverse {
            background-color: white;
            color: var(--neutral-700);
            border: 1px solid var(--neutral-500);
        }

        /* Success Badge Variants */
        .badge-success {
            background-color: var(--success);
            color: white;
        }

        .badge-success-light {
            background-color: rgba(16, 185, 129, 0.1);
            color: var(--success);
            border: 1px solid rgba(16, 185, 129, 0.3);
        }

        .badge-success-inverse {
            background-color: white;
            color: var(--success);
            border: 1px solid var(--success);
        }

        /* Warning Badge Variants */
        .badge-warning {
            background-color: var(--warning);
            color: white;
        }

        .badge-warning-light {
            background-color: rgba(245, 158, 11, 0.1);
            color: var(--warning);
            border: 1px solid rgba(245, 158, 11, 0.3);
        }

        .badge-warning-inverse {
            background-color: white;
            color: var(--warning);
            border: 1px solid var(--warning);
        }

        /* Error Badge Variants */
        .badge-error {
            background-color: var(--error);
            color: white;
        }

        .badge-error-light {
            background-color: rgba(239, 68, 68, 0.1);
            color: var(--error);
            border: 1px solid rgba(239, 68, 68, 0.3);
        }

        .badge-error-inverse {
            background-color: white;
            color: var(--error);
            border: 1px solid var(--error);
        }

        /* Info Badge Variants */
        .badge-info {
            background-color: var(--info);
            color: white;
        }

        .badge-info-light {
            background-color: rgba(80, 110, 228, 0.1);
            color: var(--info);
            border: 1px solid rgba(80, 110, 228, 0.3);
        }

        .badge-info-inverse {
            background-color: white;
            color: var(--info);
            border: 1px solid var(--info);
        }

        /* Background Styles */
        .bg-primary {
            background-color: var(--primary-500);
            color: white;
            padding: 1.5rem;
            border-radius: 8px;
            margin: 0.5rem 0;
        }

        .bg-primary-light {
            background-color: var(--primary-50);
            color: var(--primary-800);
            padding: 1.5rem;
            border-radius: 8px;
            margin: 0.5rem 0;
            border: 1px solid var(--primary-100);
        }

        .bg-primary-inverse {
            background-color: white;
            color: var(--primary-500);
            padding: 1.5rem;
            border-radius: 8px;
            margin: 0.5rem 0;
            border: 1px solid var(--primary-500);
        }

        .bg-neutral {
            background-color: var(--neutral-500);
            color: white;
            padding: 1.5rem;
            border-radius: 8px;
            margin: 0.5rem 0;
        }

        .bg-neutral-light {
            background-color: var(--neutral-100);
            color: var(--neutral-800);
            padding: 1.5rem;
            border-radius: 8px;
            margin: 0.5rem 0;
            border: 1px solid var(--neutral-200);
        }

        .bg-neutral-inverse {
            background-color: white;
            color: var(--neutral-700);
            padding: 1.5rem;
            border-radius: 8px;
            margin: 0.5rem 0;
            border: 1px solid var(--neutral-500);
        }

        .bg-success {
            background-color: var(--success);
            color: white;
            padding: 1.5rem;
            border-radius: 8px;
            margin: 0.5rem 0;
        }

        .bg-success-light {
            background-color: rgba(16, 185, 129, 0.1);
            color: var(--success);
            padding: 1.5rem;
            border-radius: 8px;
            margin: 0.5rem 0;
            border: 1px solid rgba(16, 185, 129, 0.2);
        }

        .bg-success-inverse {
            background-color: white;
            color: var(--success);
            padding: 1.5rem;
            border-radius: 8px;
            margin: 0.5rem 0;
            border: 1px solid var(--success);
        }

        .bg-warning {
            background-color: var(--warning);
            color: white;
            padding: 1.5rem;
            border-radius: 8px;
            margin: 0.5rem 0;
        }

        .bg-warning-light {
            background-color: rgba(245, 158, 11, 0.1);
            color: var(--warning);
            padding: 1.5rem;
            border-radius: 8px;
            margin: 0.5rem 0;
            border: 1px solid rgba(245, 158, 11, 0.2);
        }

        .bg-warning-inverse {
            background-color: white;
            color: var(--warning);
            padding: 1.5rem;
            border-radius: 8px;
            margin: 0.5rem 0;
            border: 1px solid var(--warning);
        }

        .bg-error {
            background-color: var(--error);
            color: white;
            padding: 1.5rem;
            border-radius: 8px;
            margin: 0.5rem 0;
        }

        .bg-error-light {
            background-color: rgba(239, 68, 68, 0.1);
            color: var(--error);
            padding: 1.5rem;
            border-radius: 8px;
            margin: 0.5rem 0;
            border: 1px solid rgba(239, 68, 68, 0.2);
        }

        .bg-error-inverse {
            background-color: white;
            color: var(--error);
            padding: 1.5rem;
            border-radius: 8px;
            margin: 0.5rem 0;
            border: 1px solid var(--error);
        }

        .bg-info {
            background-color: var(--info);
            color: white;
            padding: 1.5rem;
            border-radius: 8px;
            margin: 0.5rem 0;
        }

        .bg-info-light {
            background-color: rgba(80, 110, 228, 0.1);
            color: var(--info);
            padding: 1.5rem;
            border-radius: 8px;
            margin: 0.5rem 0;
            border: 1px solid rgba(80, 110, 228, 0.2);
        }

        .bg-info-inverse {
            background-color: white;
            color: var(--info);
            padding: 1.5rem;
            border-radius: 8px;
            margin: 0.5rem 0;
            border: 1px solid var(--info);
        }

        .color-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 1rem;
            margin-top: 1rem;
        }

        .color-swatch {
            height: 80px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 0.8rem;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .code-block {
            background-color: var(--neutral-100);
            padding: 1rem;
            border-radius: 6px;
            font-family: monospace;
            margin: 1rem 0;
            overflow-x: auto;
        }

        .note {
            background-color: var(--warning-light);
            border-left: 4px solid var(--warning);
            padding: 1rem;
            margin: 1.5rem 0;
            border-radius: 0 6px 6px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Color System UI Components</h1>
        
        <div class="section">
            <h2>Color Palette</h2>
            <p>This is the complete color palette defined in your CSS variables:</p>
            
            <h3>Primary Colors</h3>
            <div class="color-grid">
                <div class="color-swatch" style="background-color: var(--primary-50); color: var(--primary-900);">--primary-50</div>
                <div class="color-swatch" style="background-color: var(--primary-100); color: var(--primary-900);">--primary-100</div>
                <div class="color-swatch" style="background-color: var(--primary-200); color: var(--primary-900);">--primary-200</div>
                <div class="color-swatch" style="background-color: var(--primary-300); color: var(--primary-900);">--primary-300</div>
                <div class="color-swatch" style="background-color: var(--primary-400); color: white;">--primary-400</div>
                <div class="color-swatch" style="background-color: var(--primary-500); color: white;">--primary-500</div>
                <div class="color-swatch" style="background-color: var(--primary-600); color: white;">--primary-600</div>
                <div class="color-swatch" style="background-color: var(--primary-700); color: white;">--primary-700</div>
                <div class="color-swatch" style="background-color: var(--primary-800); color: white;">--primary-800</div>
                <div class="color-swatch" style="background-color: var(--primary-900); color: white;">--primary-900</div>
            </div>
            
            <h3>Neutral Colors</h3>
            <div class="color-grid">
                <div class="color-swatch" style="background-color: var(--neutral-50); color: var(--neutral-900);">--neutral-50</div>
                <div class="color-swatch" style="background-color: var(--neutral-100); color: var(--neutral-900);">--neutral-100</div>
                <div class="color-swatch" style="background-color: var(--neutral-200); color: var(--neutral-900);">--neutral-200</div>
                <div class="color-swatch" style="background-color: var(--neutral-300); color: var(--neutral-900);">--neutral-300</div>
                <div class="color-swatch" style="background-color: var(--neutral-400); color: white;">--neutral-400</div>
                <div class="color-swatch" style="background-color: var(--neutral-500); color: white;">--neutral-500</div>
                <div class="color-swatch" style="background-color: var(--neutral-600); color: white;">--neutral-600</div>
                <div class="color-swatch" style="background-color: var(--neutral-700); color: white;">--neutral-700</div>
                <div class="color-swatch" style="background-color: var(--neutral-800); color: white;">--neutral-800</div>
                <div class="color-swatch" style="background-color: var(--neutral-900); color: white;">--neutral-900</div>
            </div>
            
            <h3>Semantic Colors</h3>
            <div class="color-grid">
                <div class="color-swatch" style="background-color: var(--success); color: white;">--success</div>
                <div class="color-swatch" style="background-color: var(--warning); color: white;">--warning</div>
                <div class="color-swatch" style="background-color: var(--error); color: white;">--error</div>
                <div class="color-swatch" style="background-color: var(--info); color: white;">--info</div>
            </div>
        </div>
        
        <div class="section">
            <h2>Buttons</h2>
            <p>Button components with standard, light, and inverse variants for all color categories.</p>
            
            <div class="component-grid">
                <div class="component-card">
                    <div class="component-title">Primary Buttons</div>
                    <button class="btn btn-primary">Primary</button>
                    <button class="btn btn-primary-light">Primary Light</button>
                    <button class="btn btn-primary-inverse">Primary Inverse</button>
                </div>
                
                <div class="component-card">
                    <div class="component-title">Neutral Buttons</div>
                    <button class="btn btn-neutral">Neutral</button>
                    <button class="btn btn-neutral-light">Neutral Light</button>
                    <button class="btn btn-neutral-inverse">Neutral Inverse</button>
                </div>
                
                <div class="component-card">
                    <div class="component-title">Success Buttons</div>
                    <button class="btn btn-success">Success</button>
                    <button class="btn btn-success-light">Success Light</button>
                    <button class="btn btn-success-inverse">Success Inverse</button>
                </div>
                
                <div class="component-card">
                    <div class="component-title">Warning Buttons</div>
                    <button class="btn btn-warning">Warning</button>
                    <button class="btn btn-warning-light">Warning Light</button>
                    <button class="btn btn-warning-inverse">Warning Inverse</button>
                </div>
                
                <div class="component-card">
                    <div class="component-title">Error Buttons</div>
                    <button class="btn btn-error">Error</button>
                    <button class="btn btn-error-light">Error Light</button>
                    <button class="btn btn-error-inverse">Error Inverse</button>
                </div>
                
                <div class="component-card">
                    <div class="component-title">Info Buttons</div>
                    <button class="btn btn-info">Info</button>
                    <button class="btn btn-info-light">Info Light</button>
                    <button class="btn btn-info-inverse">Info Inverse</button>
                </div>
            </div>
            
            <div class="code-block">
                &lt;button class="btn btn-primary"&gt;Primary&lt;/button&gt;<br>
                &lt;button class="btn btn-primary-light"&gt;Primary Light&lt;/button&gt;<br>
                &lt;button class="btn btn-primary-inverse"&gt;Primary Inverse&lt;/button&gt;
            </div>
        </div>
        
        <div class="section">
            <h2>Badges</h2>
            <p>Badge components with standard, light, and inverse variants for all color categories.</p>
            
            <div class="component-grid">
                <div class="component-card">
                    <div class="component-title">Primary Badges</div>
                    <span class="badge badge-primary">Primary</span>
                    <span class="badge badge-primary-light">Primary Light</span>
                    <span class="badge badge-primary-inverse">Primary Inverse</span>
                </div>
                
                <div class="component-card">
                    <div class="component-title">Neutral Badges</div>
                    <span class="badge badge-neutral">Neutral</span>
                    <span class="badge badge-neutral-light">Neutral Light</span>
                    <span class="badge badge-neutral-inverse">Neutral Inverse</span>
                </div>
                
                <div class="component-card">
                    <div class="component-title">Success Badges</div>
                    <span class="badge badge-success">Success</span>
                    <span class="badge badge-success-light">Success Light</span>
                    <span class="badge badge-success-inverse">Success Inverse</span>
                </div>
                
                <div class="component-card">
                    <div class="component-title">Warning Badges</div>
                    <span class="badge badge-warning">Warning</span>
                    <span class="badge badge-warning-light">Warning Light</span>
                    <span class="badge badge-warning-inverse">Warning Inverse</span>
                </div>
                
                <div class="component-card">
                    <div class="component-title">Error Badges</div>
                    <span class="badge badge-error">Error</span>
                    <span class="badge badge-error-light">Error Light</span>
                    <span class="badge badge-error-inverse">Error Inverse</span>
                </div>
                
                <div class="component-card">
                    <div class="component-title">Info Badges</div>
                    <span class="badge badge-info">Info</span>
                    <span class="badge badge-info-light">Info Light</span>
                    <span class="badge badge-info-inverse">Info Inverse</span>
                </div>
            </div>
            
            <div class="code-block">
                &lt;span class="badge badge-primary"&gt;Primary&lt;/span&gt;<br>
                &lt;span class="badge badge-primary-light"&gt;Primary Light&lt;/span&gt;<br>
                &lt;span class="badge badge-primary-inverse"&gt;Primary Inverse&lt;/span&gt;
            </div>
        </div>
        
        <div class="section">
            <h2>Backgrounds</h2>
            <p>Background components with standard, light, and inverse variants for all color categories.</p>
            
            <div class="component-card">
                <div class="component-title">Primary Backgrounds</div>
                <div class="bg-primary">Primary Background</div>
                <div class="bg-primary-light">Primary Light Background</div>
                <div class="bg-primary-inverse">Primary Inverse Background</div>
            </div>
            
            <div class="component-card">
                <div class="component-title">Neutral Backgrounds</div>
                <div class="bg-neutral">Neutral Background</div>
                <div class="bg-neutral-light">Neutral Light Background</div>
                <div class="bg-neutral-inverse">Neutral Inverse Background</div>
            </div>
            
            <div class="component-card">
                <div class="component-title">Success Backgrounds</div>
                <div class="bg-success">Success Background</div>
                <div class="bg-success-light">Success Light Background</div>
                <div class="bg-success-inverse">Success Inverse Background</div>
            </div>
            
            <div class="component-card">
                <div class="component-title">Warning Backgrounds</div>
                <div class="bg-warning">Warning Background</div>
                <div class="bg-warning-light">Warning Light Background</div>
                <div class="bg-warning-inverse">Warning Inverse Background</div>
            </div>
            
            <div class="component-card">
                <div class="component-title">Error Backgrounds</div>
                <div class="bg-error">Error Background</div>
                <div class="bg-error-light">Error Light Background</div>
                <div class="bg-error-inverse">Error Inverse Background</div>
            </div>
            
            <div class="component-card">
                <div class="component-title">Info Backgrounds</div>
                <div class="bg-info">Info Background</div>
                <div class="bg-info-light">Info Light Background</div>
                <div class="bg-info-inverse">Info Inverse Background</div>
            </div>
            
            <div class="code-block">
                &lt;div class="bg-primary"&gt;Primary Background&lt;/div&gt;<br>
                &lt;div class="bg-primary-light"&gt;Primary Light Background&lt;/div&gt;<br>
                &lt;div class="bg-primary-inverse"&gt;Primary Inverse Background&lt;/div&gt;
            </div>
        </div>
        
        <div class="note">
            <p><strong>Usage Notes:</strong></p>
            <ul>
                <li>All components use CSS custom properties (variables) defined in your :root</li>
                <li>Each color category has three variants: standard, light, and inverse</li>
                <li>Buttons include hover effects with subtle transformations</li>
                <li>Badges are designed to be small, pill-shaped indicators</li>
                <li>Backgrounds can be used for section backgrounds or containers</li>
            </ul>
        </div>
    </div>
</body>
</html>
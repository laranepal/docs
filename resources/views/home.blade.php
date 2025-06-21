<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laranepal API Documentation</title>
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Laranepal" />
    <link rel="manifest" href="/site.webmanifest" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">
    <section class="min-h-screen flex items-center justify-center py-20 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2">
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 bg-red-600 rounded-md flex items-center justify-center mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-red-600 bg-red-50 px-3 py-1 rounded-full">API v1.0</span>
                    </div>

                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-6">
                        Laranepal <span class="text-red-600">API</span> Documentation
                    </h1>

                    <p class="text-xl text-gray-600 mb-8">
                        Complete reference for accessing Laranepal articles with filters by type, category, and author.
                        <span class="block mt-2 text-gray-500">Currently available endpoints with more features coming
                            soon.</span>
                    </p>

                    <div class="flex flex-wrap gap-4 mb-12">
                        <a href="/docs"
                            class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                            Quick Start Guide
                        </a>
                        <a href="#endpoints"
                            class="border border-gray-300 hover:border-gray-400 text-gray-700 hover:text-gray-900 px-6 py-3 rounded-lg font-medium transition-colors">
                            View All Endpoints
                        </a>
                    </div>

                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                        <div class="flex -space-x-2">
                            <img class="w-8 h-8 rounded-full border-2 border-white" src="https://github.com/github.png"
                                alt="GitHub">
                            <img class="w-8 h-8 rounded-full border-2 border-white" src="https://github.com/npm.png"
                                alt="npm">
                            <img class="w-8 h-8 rounded-full border-2 border-white" src="https://github.com/postman.png"
                                alt="Postman">
                        </div>
                        <span>Trusted by 10,000+ developers</span>
                    </div>
                </div>

                <div class="lg:w-1/2">
                    <div class="code-block rounded-xl overflow-hidden border border-gray-200">
                        <div class="bg-gray-800 px-5 py-3 flex items-center">
                            <div class="flex space-x-2 mr-4">
                                <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                                <div class="w-3 h-3 rounded-full bg-green-500"></div>
                            </div>
                            <div class="text-xs text-gray-400 code">terminal</div>
                        </div>
                        <div class="p-6 code text-sm text-gray-300">
                            <div class="mb-4">
                                <span class="text-green-400"># Install the client</span>
                            </div>
                            <div class="mb-6">
                                <span class="text-red-400">$</span> npm install laranepal
                            </div>

                            <div class="mb-4">
                                <span class="text-green-400"># Initialize with your API key</span>
                            </div>
                            <div class="mb-6">
                                <span class="text-blue-400">const</span> <span class="text-gray-300">client</span> =
                                <span class="text-blue-400">require</span>(<span
                                    class="text-yellow-400">'laranepal'</span>)({<br>
                                <span class="text-red-400 ml-4">apiKey</span>: <span
                                    class="text-yellow-400">'your_api_key_here'</span><br>
                                });
                            </div>

                            <div class="mb-4">
                                <span class="text-green-400"># Fetch all provinces</span>
                            </div>
                            <div>
                                <span class="text-blue-400">const</span> <span class="text-gray-300">provinces</span> =
                                <span class="text-blue-400">await</span> <span class="text-gray-300">client</span>.<span
                                    class="text-purple-400">provinces</span>.<span
                                    class="text-purple-400">list</span>();<br>
                                <span class="text-gray-300">console</span>.<span
                                    class="text-purple-400">log</span>(<span
                                    class="text-gray-300">provinces</span>);<span class="terminal-cursor">|</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Simple animated cursor effect -->
    <script>
        // Simple terminal cursor animation
        const cursor = document.querySelector('.terminal-cursor');
        setInterval(() => {
            cursor.style.opacity = cursor.style.opacity === '0' ? '1' : '0';
        }, 500);
        
        // Simple hover effect for code block
        const codeBlock = document.querySelector('.code-block');
        codeBlock.addEventListener('mousemove', (e) => {
            const x = e.clientX - codeBlock.getBoundingClientRect().left;
            const y = e.clientY - codeBlock.getBoundingClientRect().top;
            
            codeBlock.style.transform = `perspective(1000px) rotateX(${(y - codeBlock.offsetHeight/2)/20}deg) rotateY(${-(x - codeBlock.offsetWidth/2)/20}deg)`;
        });
        
        codeBlock.addEventListener('mouseleave', () => {
            codeBlock.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';
        });
    </script>
</body>

</html>
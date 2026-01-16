<?php
$page_title = "Contacto | Datapolis - Hablemos de tu Proyecto IA";
$page_description = "Contacta a Datapolis para una consultoría gratuita sobre soluciones de Inteligencia Artificial para tu PyME.";
$current_page = "contacto";

include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative pt-32 pb-16 bg-primary overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\" 60\"
            height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\"
            fill-rule=\"evenodd\"%3E%3Cg fill=\"%2300d4ff\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36
            34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6
            4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center">
            <h1 class="font-heading text-5xl sm:text-6xl lg:text-7xl font-bold mb-6">
                <span class="gradient-text">Conversemos</span>
            </h1>
            <p class="text-xl text-muted max-w-2xl mx-auto mb-8">
                Estamos listos para ayudarte a dar el salto hacia la Inteligencia Artificial
            </p>
            <!-- Decorative Line -->
            <div class="w-24 h-1 gradient-bg mx-auto rounded-full"></div>
        </div>
    </div>
</section>

<!-- Contact Content -->
<section class="py-24 bg-light text-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Left Column - Info -->
            <div>
                <div class="bg-primary text-white p-8 rounded-2xl border-l-4 border-accent mb-8">
                    <h2 class="font-heading text-2xl font-bold mb-6">Información de Contacto</h2>

                    <div class="space-y-6">
                        <!-- Hours -->
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 rounded-lg bg-secondary flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-clock text-accent"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Horario de Atención</h3>
                                <p class="text-muted text-sm">Lunes a Viernes: 09:00 - 18:00</p>
                                <p class="text-muted text-sm">Sábado: 10:00 - 14:00</p>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 rounded-lg bg-secondary flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-accent"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Ubicación</h3>
                                <p class="text-muted text-sm">Av. Providencia 1234, Oficina 501</p>
                                <p class="text-muted text-sm">Providencia, Santiago, Chile</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 rounded-lg bg-secondary flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone text-accent"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Teléfono</h3>
                                <a href="tel:+56912345678" class="text-accent hover:text-white transition-colors">
                                    +56 9 1234 5678
                                </a>
                            </div>
                        </div>

                        <!-- WhatsApp -->
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 rounded-lg bg-green-600 flex items-center justify-center flex-shrink-0">
                                <i class="fab fa-whatsapp text-white"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">WhatsApp</h3>
                                <a href="https://wa.me/56912345678?text=Hola!%20Me%20interesa%20conocer%20más%20sobre%20sus%20servicios%20de%20IA"
                                    class="text-accent hover:text-white transition-colors">
                                    Escríbenos por WhatsApp
                                </a>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 rounded-lg bg-secondary flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-accent"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Email</h3>
                                <a href="mailto:hola@datapolis.cl"
                                    class="text-accent hover:text-white transition-colors">
                                    hola@datapolis.cl
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Note -->
                    <div class="mt-8 p-4 rounded-lg bg-accent/10 border border-accent/30">
                        <p class="text-sm">
                            <i class="fas fa-lightbulb text-accent mr-2"></i>
                            <span class="text-muted">Ofrecemos consultorías virtuales para clientes fuera de
                                Santiago</span>
                        </p>
                    </div>

                    <!-- Social Links -->
                    <div class="mt-8 pt-6 border-t border-white/10">
                        <h3 class="font-semibold mb-4">Síguenos</h3>
                        <div class="flex space-x-4">
                            <a href="#"
                                class="w-12 h-12 rounded-full bg-secondary flex items-center justify-center text-muted hover:text-accent hover:bg-accent/20 transition-all">
                                <i class="fab fa-linkedin-in text-xl"></i>
                            </a>
                            <a href="#"
                                class="w-12 h-12 rounded-full bg-secondary flex items-center justify-center text-muted hover:text-accent hover:bg-accent/20 transition-all">
                                <i class="fab fa-instagram text-xl"></i>
                            </a>
                            <a href="#"
                                class="w-12 h-12 rounded-full bg-secondary flex items-center justify-center text-muted hover:text-accent hover:bg-accent/20 transition-all">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                            <a href="#"
                                class="w-12 h-12 rounded-full bg-secondary flex items-center justify-center text-muted hover:text-accent hover:bg-accent/20 transition-all">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Form -->
            <div>
                <div class="bg-primary p-8 rounded-2xl relative overflow-hidden">
                    <!-- Gradient Top Border -->
                    <div class="absolute top-0 left-0 right-0 h-1 gradient-bg"></div>

                    <h2 class="font-heading text-2xl font-bold text-white mb-6">Cuéntanos sobre tu proyecto</h2>

                    <form action="#" method="POST" class="space-y-6">
                        <!-- Name -->
                        <div>
                            <label for="nombre" class="block text-sm font-medium text-muted mb-2">
                                Nombre completo <span class="text-accent">*</span>
                            </label>
                            <input type="text" id="nombre" name="nombre" required
                                class="w-full px-4 py-3 bg-secondary/50 border border-white/10 rounded-lg text-white placeholder-muted focus:border-accent focus:ring-1 focus:ring-accent outline-none transition-all"
                                placeholder="Tu nombre">
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-muted mb-2">
                                Email <span class="text-accent">*</span>
                            </label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 bg-secondary/50 border border-white/10 rounded-lg text-white placeholder-muted focus:border-accent focus:ring-1 focus:ring-accent outline-none transition-all"
                                placeholder="tu@empresa.cl">
                        </div>

                        <!-- Phone -->
                        <div>
                            <label for="telefono" class="block text-sm font-medium text-muted mb-2">
                                Teléfono
                            </label>
                            <input type="tel" id="telefono" name="telefono"
                                class="w-full px-4 py-3 bg-secondary/50 border border-white/10 rounded-lg text-white placeholder-muted focus:border-accent focus:ring-1 focus:ring-accent outline-none transition-all"
                                placeholder="+56 9 1234 5678">
                        </div>

                        <!-- Company -->
                        <div>
                            <label for="empresa" class="block text-sm font-medium text-muted mb-2">
                                Empresa
                            </label>
                            <input type="text" id="empresa" name="empresa"
                                class="w-full px-4 py-3 bg-secondary/50 border border-white/10 rounded-lg text-white placeholder-muted focus:border-accent focus:ring-1 focus:ring-accent outline-none transition-all"
                                placeholder="Nombre de tu empresa">
                        </div>

                        <!-- Service Interest -->
                        <div>
                            <label for="servicio" class="block text-sm font-medium text-muted mb-2">
                                ¿Qué servicio te interesa?
                            </label>
                            <select id="servicio" name="servicio"
                                class="w-full px-4 py-3 bg-secondary/50 border border-white/10 rounded-lg text-white focus:border-accent focus:ring-1 focus:ring-accent outline-none transition-all">
                                <option value="" class="bg-primary">Selecciona una opción</option>
                                <option value="automatizacion" class="bg-primary">Automatización Inteligente</option>
                                <option value="analytics" class="bg-primary">Analytics & Data Science</option>
                                <option value="chatbots" class="bg-primary">Chatbots & Asistentes IA</option>
                                <option value="vision" class="bg-primary">Visión Computacional</option>
                                <option value="consultoria" class="bg-primary">Consultoría en ML</option>
                                <option value="capacitacion" class="bg-primary">Capacitación</option>
                                <option value="otro" class="bg-primary">Otro / No estoy seguro</option>
                            </select>
                        </div>

                        <!-- Company Size -->
                        <div>
                            <label for="tamaño" class="block text-sm font-medium text-muted mb-2">
                                Tamaño de la empresa
                            </label>
                            <select id="tamaño" name="tamaño"
                                class="w-full px-4 py-3 bg-secondary/50 border border-white/10 rounded-lg text-white focus:border-accent focus:ring-1 focus:ring-accent outline-none transition-all">
                                <option value="" class="bg-primary">Selecciona una opción</option>
                                <option value="1-10" class="bg-primary">1-10 empleados</option>
                                <option value="11-50" class="bg-primary">11-50 empleados</option>
                                <option value="51-200" class="bg-primary">51-200 empleados</option>
                                <option value="200+" class="bg-primary">Más de 200 empleados</option>
                            </select>
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="mensaje" class="block text-sm font-medium text-muted mb-2">
                                Cuéntanos sobre tu proyecto
                            </label>
                            <textarea id="mensaje" name="mensaje" rows="4"
                                class="w-full px-4 py-3 bg-secondary/50 border border-white/10 rounded-lg text-white placeholder-muted focus:border-accent focus:ring-1 focus:ring-accent outline-none transition-all resize-none"
                                placeholder="Describe brevemente qué problema buscas resolver o qué proceso quieres mejorar..."></textarea>
                        </div>

                        <!-- Submit -->
                        <button type="submit"
                            class="w-full py-4 rounded-lg gradient-bg font-bold text-lg uppercase tracking-wider hover-scale flex items-center justify-center space-x-2">
                            <span>Enviar Mensaje</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>

                        <p class="text-xs text-muted text-center">
                            Al enviar este formulario, aceptas nuestra <a href="#"
                                class="text-accent hover:underline">Política de Privacidad</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-24 bg-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-heading text-3xl sm:text-4xl font-bold mb-4">
                Cómo <span class="gradient-text">Llegar</span>
            </h2>
            <p class="text-muted">Estamos en el corazón de Providencia, Santiago</p>
        </div>

        <!-- Map Container -->
        <div class="rounded-2xl overflow-hidden border border-white/10">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.9974088888!2d-70.6088!3d-33.4267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf6c8f7e4e1d%3A0x9c0c7e6e6e6e6e6e!2sAv.%20Providencia%201234%2C%20Providencia%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1234567890"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                class="grayscale hover:grayscale-0 transition-all duration-500"></iframe>
        </div>

        <!-- Transport Info -->
        <div class="grid md:grid-cols-3 gap-8 mt-12">
            <div class="flex items-start space-x-4">
                <div class="w-10 h-10 rounded-lg bg-accent/20 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-subway text-accent"></i>
                </div>
                <div>
                    <h3 class="font-semibold mb-1">Metro</h3>
                    <p class="text-muted text-sm">Línea 1, estación Pedro de Valdivia a 5 min caminando</p>
                </div>
            </div>

            <div class="flex items-start space-x-4">
                <div class="w-10 h-10 rounded-lg bg-accent/20 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-car text-accent"></i>
                </div>
                <div>
                    <h3 class="font-semibold mb-1">Estacionamiento</h3>
                    <p class="text-muted text-sm">Estacionamiento público disponible en el edificio</p>
                </div>
            </div>

            <div class="flex items-start space-x-4">
                <div class="w-10 h-10 rounded-lg bg-accent/20 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-video text-accent"></i>
                </div>
                <div>
                    <h3 class="font-semibold mb-1">Reuniones Virtuales</h3>
                    <p class="text-muted text-sm">También disponibles vía Zoom o Google Meet</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
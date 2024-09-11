<x-layouts.app title="Contact">
    <p>Heb je vragen of wil je met ons in contact komen? Vul het onderstaande formulier in of stuur ons een e-mail op info@smart-solutions.nl. We proberen zo snel mogelijk te reageren!</p>

    <form>
        <label for="name">Naam:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="subject">Onderwerp:</label>
        <input type="text" id="subject" name="subject" required>

        <label for="message">Bericht:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Verzenden</button>
    </form>

</x-layouts.app>

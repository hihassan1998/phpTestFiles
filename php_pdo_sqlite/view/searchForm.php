<form method="get" action="">
    <label for="query">Sök efter namn, datum, eller längd:</label>
    <input type="text" id="query" name="query" placeholder="Skriv din sökning här" value="<?= htmlspecialchars($query ?? '') ?>">
    
    <input type="hidden" name="doit" value="1">
    
    <button type="submit">Sök</button>
</form>

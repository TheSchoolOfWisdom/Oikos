<h1>Creation d'un article</h1>

<div class="add-form">

    <form method="post" enctype="multipart/form-data">

        <div class="form-input">
            <label>Titre</label>
            <input type="text" name="title"/>
        </div>

        <div class="form-text">
            <label>Description</label>
            <textarea name="description" rows="3" ></textarea>
        </div>

        <div class="form-text">
            <label>Contenu</label>
            <textarea name="content" rows="8"></textarea>
        </div>

        <div class="double-column">

            <div class="image-input">
                <label>Image</label>
                <input type="file" name="image" accept="image/*" onchange="preview_image(event)">
            </div>

            <div class="date-input form-input">
                <label>Date de création</label>
                <input type="date" name="created" required>
            </div>

        </div>

        <img id="output-image"/>

        <div class="success-input cancel-btn">
            <div class="buttons">
                <a href="?controllers=articles&method=list">Annuler</a>
                <input type="submit" name="ADD" value="Créer" />
            </div>
        </div>

    </form>

</div>
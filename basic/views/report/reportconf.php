<?php

use app\models\HistoriqueSearch;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;0

?>

<?php echo

    '<script type="text/javascript">
        $("#table").click(function() {
            if ($("#tableData").is(":visible")) {
                $("#tableData").hide()
            } else {
                $("#tableData").show()
            }
        });
        console.log("bg");
        $(document).ready(function() {
            console.log("eee");
        };
    </script>'
?>

<form>
    <div class="row">
        <div class="col-md-6">
            <header>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="table" required>
                        <label class="form-check-label" for="table">
                            Table
                        </label>
                    </div>
                </div>
            </header>
            <div class="row" id="tableData">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-11">
                        <input class="form-check-input" type="checkbox" value="" id="valeurAv" required>
                        <label class="form-check-label" for="valeurAv">
                            Selon Sa Valeur Avant Modification
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-11">
                        <input class="form-check-input" type="checkbox" value="" id="valeurAp" required>
                        <label class="form-check-label" for="valeurAp">
                            Selon Sa Valeur Apres Modification
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-11">
                        <input class="form-check-input" type="checkbox" value="" id="widget" required>
                        <label class="form-check-label" for="widget">
                            Selon Sa Date de Modification
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <header>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="card" required>
                        <label class="form-check-label" for="card">
                            Card
                        </label>
                    </div>
                </div>
            </header>
            <div class="row" id="cardData">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-11">
                        <select id="nomColonne" class="form-control">
                            <label for="nomColonne">Choisir Le Label Sur Lequel Faire Le Report</label>
                            <option value="" selected>choisir</option>
                            <?php
                            $hist = HistoriqueSearch::find()
                                ->select('nomColonne')
                                ->distinct()
                                ->where([
                                    'not', ['nomColonne' => null]
                                ])
                                ->limit(10)
                                ->all();
                            foreach ($hist as $key => $value) {
                                //Yii::trace(json_encode($value) . ' ' . json_encode($key));
                            ?>
                                <option value="<?php echo $value->nomColonne ?>">
                                    <?php echo $value->nomColonne ?>
                                </option>
                            <?php
                            } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-11">
                        <fieldset class="form-group">
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-11">
                                        <legend style="margin-top: 10px" class="col-form-label pt-0">Fonction à utiliser</legend>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="function" id="min" value="min" checked>
                                            <label class="form-check-label" for="min">
                                                Minimum
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="function" id="max" value="max">
                                            <label class="form-check-label" for="max">
                                                Maximum
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="function" id="avg" value="avg">
                                            <label class="form-check-label" for="avg">
                                                Moyenne
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="function" id="count" value="count">
                                            <label class="form-check-label" for="count">
                                                Count
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="function" id="sum" value="sum">
                                            <label class="form-check-label" for="sum">
                                                Somme
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <header>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="table" required>
                        <label class="form-check-label" for="table">
                            Column Chart
                        </label>
                    </div>
                </div>
            </header>
            <div class="row" id="columnchart">
                <div class="row">

                </div>
                <div class="row">

                </div>
            </div>
        </div>
    </div>
    <?php if (Yii::$app->user->isGuest) : ?>

    <?php else : ?>

        <?php $form = ActiveForm::begin(['action' => ['submit'], 'method' => 'POST']);     ?>
        <div class="form-group">
            <?= Html::submitButton('Visualiser', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>

    <?php endif ?>
</form>
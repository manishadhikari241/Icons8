
<div class="form-group">
    <div class="control-label">
        <label>Width<span class="text-danger">*</span> <i class="label label-default">px</i> </label>
        <i class="fa fa-info-circle" tooltip="Min width: 8px &amp; Max width: 1024px"></i>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="300" ng-model-options='{ debounce: 300 }' ng-change="image()" ng-model="data.width">
        <span class="input-group-addon"><i class="fa fa-arrows-h"></i></span>
    </div>
</div>

<div class="form-group">

    <div class="control-label">
        <label>Height<span class="text-danger">*</span> <i class="label label-default">px</i> </label>
        <i class="fa fa-info-circle" tooltip="Min heigth: 8px &amp; Max heigth: 1024px"></i>
    </div>

    <div class="input-group">
    <input type="text" class="form-control" placeholder="300" ng-model-options='{ debounce: 300 }' ng-change="image()" ng-model="data.height">
        <span class="input-group-addon"><i class="fa fa-arrows-v"></i></span>
    </div>

</div>

<div class="form-group">
    <div class="control-label">
        <label>Background <i class="label label-default">hex color</i> </label>
        <label class="other-control">
            <input type="checkbox" ng-model="transparentbg" ng-click="image()"> Transparent
        </label>
    </div>
    <div class="input-group">
        <input ng-disabled="transparentbg" colorpicker colorpicker-close-on-select colorpicker-size="200" ng-change="image()" ng-model-options='{ debounce: 300 }' ng-model="data.background" type="text" class="form-control" placeholder="#3c8dbc"  />
        <span class="input-group-addon"><i class="fa fa-image"></i></span>
    </div>
</div>

<div class="form-group">
    <div class="control-label">
        <label>Font Color <i class="label label-default">hex color</i> </label>
    </div>
    <div class="input-group">
        <input colorpicker colorpicker-close-on-select colorpicker-size="200" ng-change="image()"  ng-model-options='{ debounce: 300 }' ng-model="data.color"  type="text" class="form-control" placeholder="#ffffff" placeholder="300" />
        <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
    </div>
</div>

<div class="form-group">
    <div class="control-label">
        <label>Font Size <i class="label label-default">px</i> </label>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="auto" ng-model-options='{ debounce: 300 }' ng-change="image()" ng-model="moredata.fontsize">
        <span class="input-group-addon"><i class="fa fa-text-height"></i></span>
    </div>
</div>

<div class="form-group mar-no">
    <div class="control-label">
        <label>Font Family</label>
    </div>
    <div class="clearfix"></div>
    <div class="control-chosen-container">
        <select class="chosen-select"
            chosen
            data-placeholder-text-single="'Default'"
            disable-search="true"
            ng-options="fontfamily.code as fontfamily.name for fontfamily in fontfamilies"
            ng-model="moredata.fontfamily"
            ng-model-options='{ debounce: 300 }'
            ng-change="image()">
            <option></option>
        </select>
    </div>
</div>

<div class="form-group">
    <div class="control-label">
        <label>Message</label>
        <label class="other-control">
            <input type="checkbox" ng-model="removetext" ng-click="image()"> Remove Text
        </label>
    </div>
    <textarea class="form-control" ng-disabled="removetext" rows="3" placeholder="Enter ..." ng-model="moredata.message" ng-change="image()" ng-model-options='{ debounce: 300 }'></textarea>
    <div><small>Use the <strong class="text-primary">_br_</strong> to enter line breaks; <strong class="text-primary">_none_</strong> to remove text</small></div>
</div>

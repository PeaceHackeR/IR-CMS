<div class="datatable-header">
    <div class="dataTables_filter">
        <label>
           <span>Search</span> 
           <input type="search" class="" placeholder="">
         </label>
    </div>
    <div class="dataTables_filter area-action">
        <label>
            <span>Show</span> 
            <div class="multi-select-full">
                <select class="select">
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="75">75</option>
                    <option value="100">100</option>
                </select>
            </div>
       </label>
    </div>
    <div class="dataTables_filter area-action sort-multiple">
        <label>
            <span>Sort by</span>
            <div class="multi-select-full select-sort-list">
                <select class="select">
                    <option value="">Select</option>
                    <option value="Publish">Publish</option>
                    <option value="Publisher">Publisher</option>
                    <option value="Divider" disabled="disabled"></option>
                    <option value="Custom">Custom</option>
                </select>
            </div>
            <div class="input-group">
                <div id="Publish" class="sort-by">
                    <div class="multi-select-full">
                        <select class="multiselect-select-all" multiple="multiple">
                            <option data-role="divider"></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <option value="Draft">Draft</option>
                        </select>
                    </div> 
                </div>
                <div id="Publisher" class="sort-by">
                    <div class="multi-select-full">
                        <select class="multiselect-select-all" multiple="multiple">
                            <option data-role="divider"></option>
                            <option value="Admin">Admin</option>
                            <option value="Anna Thompson">Anna Thompson</option>
                            <option value="Carl Matthews">Carl Matthews</option>
                            <option value="Byron Reyes">Byron Reyes</option>
                        </select>
                    </div> 
                </div>
                <div id="Custom" class="sort-by">
                    <div class="multi-select-full">
                        <select class="multiselect-select-all" multiple="multiple">
                            <option data-role="divider"></option>
                            <optgroup label="Publish">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="Draft">Draft</option>
                            </optgroup>
                            <option data-role="divider"></option>
                            <optgroup label="Publisher">
                                <option value="Admin">Admin</option>
                                <option value="Anna Thompson">Anna Thompson</option>
                                <option value="Carl Matthews">Carl Matthews</option>
                                <option value="Byron Reyes">Byron Reyes</option>
                            </optgroup>
                        </select>
                    </div> 
                </div>
            </div>
        </label>
    </div>
    <div class="dataTables_filter area-action">
        <button type="submit" class="btn btn-submit">Submit</button>
    </div>
</div>

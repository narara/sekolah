<div class="container-fluid">
    <div class="row-fluid" style="height: 600px">
        <div class="span2">

            <ul class="nav nav-list">
                <li class="nav-header">
                    <a href="<?php echo base_url(); ?>index.php/backend/cpageadmin">Dashboard</a>
                </li>
            </ul>


        </div>
        <div class="span10">
            <div class="tab-content">
                <div class="tab-pane active" id="lA">

                    <ul id="tab" class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#home">List Artikel</a>
                        </li>


                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div id="home" class="tab-pane fade active in">

                            <div id="myTabContent" class="tab-content">
                                <div id="home" class="tab-pane fade active in">

                                    <div class="span8">
                                        <table class="table table-condensed">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Title Artikel</th>
                                                <th>Note Artikel</th>

                                            </tr>
                                            </thead>
                                            <tbody>


                                            <?php $no = 1;
                                            foreach($artikel_row as $row)
                                            {?>

                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $row->title_artikel; ?></td>
                                                <td><?php echo $row->note_artikel; ?></td>
                                                <td>
                                                    <i class="icon-minus-sign minus"></i>


                                                </td>
                                                <td>
                                                    <i class="icon-edit edit"></i>
                                                </td>
                                            </tr>

                                                <?php
                                                $no++;
                                            }
                                            ?>



                                            </tbody>
                                        </table>
                                    </div>


                                </div>

                            </div>

                        </div>

                    </div>






                </div>
                <div class="tab-pane" id="lB">



                    <form class="well">
                        as
                    </form>

                </div>
                <div class="tab-pane" id="lC">

                    <form class="well">
                        <label>Label name</label>
                        <input type="text" class="span3" placeholder="Type something…"/>
                        <span class="help-inline">Associated help text!</span>
                        <label class="checkbox">
                            <input type="checkbox"/>
                            Check me out
                        </label>
                        <button type="submit" class="btn">Submit</button>
                    </form>

                </div>
                <div class="tab-pane" id="lD">

                    <form class="well">
                        <label>Label name</label>
                        <input type="text" class="span3" placeholder="Type something…"/>
                        <span class="help-inline">Associated help text!</span>
                        <label class="checkbox">
                            <input type="checkbox"/>
                            Check me out
                        </label>
                        <button type="submit" class="btn">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

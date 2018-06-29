<?php

/**
 * This is the model class for table "{{ticket_category}}".
 *
 * The followings are the available columns in table '{{ticket_category}}':
 * @property integer $id
 * @property integer $event_id
 * @property string $title
 * @property string $seat_amount
 * @property string $category_color
 * @property integer $price
 * @property integer $created_by
 * @property string $created_on
 * @property integer $updated_by
 * @property string $updated_on
 */
class TicketCategory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{ticket_category}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('event_id, title, , price, created_by, created_on', 'required'),
			array('event_id, price, created_by, updated_by, seat_amount', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>100),
			array('category_color', 'length', 'max'=>6),
			array('updated_on, category_color,seat_amount, updated_by', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, event_id,seat_amount, title, category_color, price, created_by, created_on, updated_by, updated_on', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'event_id' => 'Event',
			'title' => 'Title',
			'seat_amount' => 'Number of Seats',
			'category_color' => 'Category Color',
			'price' => 'Price',
			'created_by' => 'Created By',
			'created_on' => 'Created On',
			'updated_by' => 'Updated By',
			'updated_on' => 'Updated On',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('event_id',$this->event_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('seat_amount',$this->seat_amount,true);
		$criteria->compare('category_color',$this->category_color,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('updated_by',$this->updated_by);
		$criteria->compare('updated_on',$this->updated_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	 
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TicketCategory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	
	public static function getData($id, $field) {
        $value = TicketCategory::model()->findByAttributes(array('id' => $id));
        if (empty($value->$field)) {
            return null;
        } else {
            return $value->$field;
        }
    }
		//Front End Ongoing Event List
public static function getEventCategory($event_id) {


        $rows = Yii::app()->db->createCommand()
                ->select('*')
                ->from('{{ticket_category}}')
                ->where('event_id=' . (int) $event_id)
                ->queryAll();

			foreach ($rows as $row) {
		        $id = $row['id'];
		        $title = $row['title'];
				$category_color = $row['category_color'];
				$catColorHexCode= TicketCategoryColor::getData($category_color, 'hex_code');
				$price = $row['price'];
				$event_id = $row['event_id'];
				
				if ($catColorHexCode=='#BFC946'){ //green
					echo'
			          	<div class="table-one__cell table-one__cell--green">
							<div class="table-one__cell-header table-one__cell-header--green">
							  <div class="table-one__cell-title">'.$title.'</div>
							</div>
							<div class="table-one__cell-body table-one__cell-body--grey-bg"  style="width:50%">
							  <div class="table-one__cell-list">
								 <div class="table-one__cell-price">$'.$price.'</div>
							  </div>
							</div>
							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="event_id" value="'.$event_id.'" />
							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="ticket_category" value="'.$id.'" />
							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="price" value="'.$price.'" />
							<div class="table-one__cell-body table-one__cell-body--grey-bg" style="width:45%">
							  <div class="table-one__cell-list">
								<select class="" style="width: 100%; border: 1px solid #eee;" id="qty1" name="quantity">
									'.TicketCategory::getQtyDropdown().'
								</select>
							  </div>
							</div>				
							<div class="table-one__cell-footer table-one__cell-footer--grey-bg table-one__cell-footer--green">
							  <button class="table-one__cell-button table-one__cell-button--cyan" onclick="buyTicket('.$row['id'].','.$row['event_id'].',\'qty1\','.$row['price'].')">Buy Ticket</button>
							</div>
			          	</div>
					';
				}
				
				if ($catColorHexCode=='#36CCCB'){ //cyan
					echo'
						<div class="table-one__cell table-one__cell--cyan">
							<div class="table-one__cell-header table-one__cell-header--cyan">
							  <div class="table-one__cell-title">'.$title.'</div>
							</div>
							<div class="table-one__cell-body table-one__cell-body--grey-bg"  style="width:50%">
							  <div class="table-one__cell-list">
								 <div class="table-one__cell-price">$'.$price.'</div>
							  </div>
							</div>

							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="event_id" value="'.$event_id.'" />
							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="ticket_category" value="'.$id.'" />
							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="price" value="'.$price.'" />
							<div class="table-one__cell-body table-one__cell-body--grey-bg" style="width:45%">
							  <div class="table-one__cell-list">
								<select class="" style="width: 100%; border: 1px solid #eee;" id="qty2" name="quantity">
										'.TicketCategory::getQtyDropdown().'
									</select>
							  </div>
							</div>				
							<div class="table-one__cell-footer table-one__cell-footer--grey-bg table-one__cell-footer--cyan">
							  <button class="table-one__cell-button table-one__cell-button--cyan" onclick="buyTicket('.$row['id'].','.$row['event_id'].',\'qty2\','.$row['price'].')">Buy Ticket</button>
							</div>
			          </div>
					';
				}
				
				if ($catColorHexCode=='#B0C4DE'){//light Cyan
					echo'
						 <div class="table-one__cell table-one__cell--lightCyan">
							<div class="table-one__cell-header table-one__cell-header--lightCyan">
							  <div class="table-one__cell-title">'.$title.'</div>
							</div>
							<div class="table-one__cell-body table-one__cell-body--grey-bg"  style="width:50%">
							<div class="table-one__cell-list">
								<div class="table-one__cell-price">$'.$price.'</div>
							</div>
							</div>

							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="event_id" value="'.$event_id.'" />
							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="ticket_category" value="'.$id.'" />
							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="price" value="'.$price.'" />
							<div class="table-one__cell-body table-one__cell-body--grey-bg" style="width:45%">
							  <div class="table-one__cell-list">
								<select class="" style="width: 100%; border: 1px solid #eee;" id="qty3" name="quantity">
										'.TicketCategory::getQtyDropdown().'
									</select>
							  </div>
							</div>				
							<div class="table-one__cell-footer table-one__cell-footer--grey-bg table-one__cell-footer--lightCyan">
							  <button class="table-one__cell-button table-one__cell-button--lightCyan" onclick="buyTicket('.$row['id'].','.$row['event_id'].',\'qty3\','.$row['price'].')">Buy Ticket</button>
							</div>
			          </div>
					';
				}
				
				if ($catColorHexCode=='#E78900'){
					echo'
						<div class="table-one__cell table-one__cell--orange">
				            <div class="table-one__cell-header table-one__cell-header--orange">
				              <div class="table-one__cell-title">'.$title.'</div>
				            </div>
				            <div class="table-one__cell-body  table-one__cell-body--grey-bg"  style="width:50%">
				               <div class="table-one__cell-list">
				               <div class="table-one__cell-price">$'.$price.'</div>
				              </div>
				            </div>

							
							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="event_id" value="'.$event_id.'" />
							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="ticket_category" value="'.$id.'" />
							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="price" value="'.$price.'" />
							<div class="table-one__cell-body table-one__cell-body--grey-bg" style="width:45%">
							  <div class="table-one__cell-list">
								<select class="" style="width: 100%; border: 1px solid #eee;" id="qty4" name="quantity">
										'.TicketCategory::getQtyDropdown().'
									</select>
							  </div>
							</div>				
							<div class="table-one__cell-footer table-one__cell-footer--grey-bg table-one__cell-footer--orange">
							  <button class="table-one__cell-button table-one__cell-button--orange" onclick="buyTicket('.$row['id'].','.$row['event_id'].',\'qty4\','.$row['price'].')">Buy Ticket</button>
							</div>
			          </div>
					';
				}
				
				if ($catColorHexCode=='#F04E4E'){
					echo'
						<div class="table-one__cell table-one__cell--red">
							<div class="table-one__cell-header table-one__cell-header--red">
							  <div class="table-one__cell-title">'.$title.'</div>
							</div>
							<div class="table-one__cell-body  table-one__cell-body--grey-bg"  style="width:50%">
							   <div class="table-one__cell-list">
							   <div class="table-one__cell-price">$'.$price.'</div>
							  </div>
							</div>

							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="event_id" value="'.$event_id.'" />
							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="ticket_category" value="'.$id.'" />
							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="price" value="'.$price.'" />
							<div class="table-one__cell-body table-one__cell-body--grey-bg" style="width:45%">
							  <div class="table-one__cell-list">
								<select class="" style="width: 100%; border: 1px solid #eee;" id="qty5" name="quantity">
										'.TicketCategory::getQtyDropdown().'
									</select>
							  </div>
							</div>				
							<div class="table-one__cell-footer table-one__cell-footer--grey-bg table-one__cell-footer--red">
							  <button class="table-one__cell-button table-one__cell-button--red" onclick="buyTicket('.$row['id'].','.$row['event_id'].',\'qty5\','.$row['price'].')">Buy Ticket</button>
							</div>
			          </div>
					';
				}
				
				if ($catColorHexCode=='#C71585'){
					echo'
						<div class="table-one__cell table-one__cell--violet">
				            <div class="table-one__cell-header table-one__cell-header--violet">
				              <div class="table-one__cell-title">'.$title.'</div>
				            </div>
				            <div class="table-one__cell-body  table-one__cell-body--grey-bg"  style="width:50%">
				               <div class="table-one__cell-list">
				               <div class="table-one__cell-price">$'.$price.'</div>
				              </div>
				            </div>

							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="event_id" value="'.$event_id.'" />
							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="ticket_category" value="'.$id.'" />
							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="price" value="'.$price.'" />
							<div class="table-one__cell-body table-one__cell-body--grey-bg" style="width:45%">
							  <div class="table-one__cell-list">
								<select class="" style="width: 100%; border: 1px solid #eee;" id="qty6" name="quantity">
										'.TicketCategory::getQtyDropdown().'
									</select>
							  </div>
							</div>				
							<div class="table-one__cell-footer table-one__cell-footer--grey-bg table-one__cell-footer--violet">
							  <button class="table-one__cell-button table-one__cell-button--violet" onclick="buyTicket('.$row['id'].','.$row['event_id'].',\'qty6\','.$row['price'].')">Buy Ticket</button>
							</div>
			          </div>
					';
				}
				
				if ($catColorHexCode=='#800000'){
					echo'
						<div class="table-one__cell table-one__cell--maroon">
							<div class="table-one__cell-header table-one__cell-header--maroon">
							  <div class="table-one__cell-title">'.$title.'</div>
							</div>
							<div class="table-one__cell-body  table-one__cell-body--grey-bg"  style="width:50%">
							   <div class="table-one__cell-list">
							   <div class="table-one__cell-price">$'.$price.'</div>
							  </div>
							</div>

							
							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="event_id" value="'.$event_id.'" />
							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="ticket_category" value="'.$id.'" />
							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="price" value="'.$price.'" />
							<div class="table-one__cell-body table-one__cell-body--grey-bg" style="width:45%">
							  	<div class="table-one__cell-list">
									<select class="" style="width: 100%; border: 1px solid #eee;" id="qty7" name="quantity">
										'.TicketCategory::getQtyDropdown().'
									</select>
								</div>
							</div>				
							<div class="table-one__cell-footer table-one__cell-footer--grey-bg table-one__cell-footer--maroon">
							  <button class="table-one__cell-button table-one__cell-button--maroon" onclick="buyTicket('.$row['id'].','.$row['event_id'].',\'qty7\','.$row['price'].')">Buy Ticket</button>
							</div>
			          </div>
					';
				}

				if ($catColorHexCode=='#000080'){
					echo'
						<div class="table-one__cell table-one__cell--navy">
							<div class="table-one__cell-header table-one__cell-header--navy">
							  <div class="table-one__cell-title">'.$title.'</div>
							</div>
							<div class="table-one__cell-body  table-one__cell-body--grey-bg"  style="width:50%">
							   <div class="table-one__cell-list">
							   <div class="table-one__cell-price">$'.$price.'</div>
							  </div>
							</div>

							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="event_id" value="'.$event_id.'" />
							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="ticket_category" value="'.$id.'" />
							<input type="hidden" class="" style="width: 100%; border: 1px solid #eee;" name="price" value="'.$price.'" min="1" max="10"/>
							<div class="table-one__cell-body table-one__cell-body--grey-bg" style="width:45%">
							  <div class="table-one__cell-list">
								<select class="" style="width: 100%; border: 1px solid #eee;" id="qty8" name="quantity">
									'.TicketCategory::getQtyDropdown().'
								</select>
							  </div>
							</div>				
							<div class="table-one__cell-footer table-one__cell-footer--grey-bg table-one__cell-footer--navy">
							  <button class="table-one__cell-button table-one__cell-button--maroon" onclick="buyTicket('.$row['id'].','.$row['event_id'].',\'qty8\','.$row['price'].')">Buy Ticket</button>
							</div>
			          </div>
					';
				}

				//echo '<select class="" style="width: 100%; border: 1px solid #eee;" id="qty8" name="quantity">'.TicketCategory::getQtyDropdown().'</select>';
		    }
    }


    public static function getQtyDropdown() {
    	//echo'<select class="" style="border: 1px solid #eee;" id="qty7" name="quantity">';
	        $option="";
			for ($i = 1; $i <=10; $i++) { 
				$option.= "<option value='" . $i. "'> ". $i . "</option>";
			}
			return $option;
		//echo '</select>';
    }

    public static function getTicketAmount($event_id) {
    	$ticket_cat_count = TicketCategory::model()->countByAttributes(array(
			'event_id'=> $event_id,
		));
		return $ticket_cat_count;
    }

}
?>


<script type="text/javascript">
	function buyTicket(category, event, quantity, price) {
        //alert(category+"-"+event+"-"+qty+"-"+price);

        var qty = $('#'+quantity).val();
        
        if (category != "" && event != "" && qty != "" && price != "")
        {
        	//alert('PASS!!!!');
            $.ajax({
                type: "GET",
                //url: "<?php //print $this->createUrl('event/addtocart'); ?>",
                url: '<?php echo Yii::app()->createAbsoluteUrl("event/addtocart"); ?>',
                data: "category=" + category + "&event=" + event + "&qty=" + qty + "&price=" + price,
                cache: false,
                async: false,
                success: function (result) {
                    //alert(result);
                    //$('#cartContent').yiiGridView('update');
                    $("#cartContent").load('<?php echo Yii::app()->getRequest()->getUrl(); ?> #cartContent');
                },
                error: function (result) {
                    //alert(result);
                    alert("some error occured. Please try again.");
                }
            });
        }
    }
</script>    

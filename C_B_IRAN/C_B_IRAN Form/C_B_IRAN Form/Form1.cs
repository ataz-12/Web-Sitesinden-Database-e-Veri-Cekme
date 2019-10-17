using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Windows.Forms.DataVisualization.Charting;
using System.Data.SqlClient;
namespace C_B_IRAN_Form
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }
        //Stajda bilgisayar adresime göre sql server ayarları 
        // static string conn = "Server=AHMETA;;Database=Test; User=rasyonetsa; Password=ras2001; ";
        //Kendı bilgısayarıma göre
     static   string conn = "Server=DESKTOP-NONT79G; Database=Test; User=ahmetakyuz; Password=12345; ";
        SqlConnection baglanti = new SqlConnection(conn);
        SqlDataAdapter da;
        DataTable table;
        string kayit = "Select * from C_B_IRAN ";
        string delete = "Delete from G_IRAN";
        private void Form1_Load(object sender, EventArgs e)
        {
            baglanti.Open();
            SqlCommand cmd = new SqlCommand(delete, baglanti);
            SqlCommand komut = new SqlCommand(kayit, baglanti);
            da = new SqlDataAdapter(komut);
            table = new DataTable();
            da.Fill(table);
            dataGridView1.DataSource = table;
            cmd.ExecuteNonQuery();
            baglanti.Close();
        }
        private void button1_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click_1(object sender, EventArgs e)
        {

            // Yenile
            DataView dv = table.DefaultView;
            dv.RowFilter = string.Format("date >= '{0}' AND date <= '{1}'", dateTimePicker1.Value.Date, dateTimePicker2.Value.Date);
            dataGridView1.DataSource = dv;
            baglanti.Open();
            SqlCommand cmd = new SqlCommand(delete, baglanti);
            cmd.ExecuteNonQuery();
            baglanti.Close();
            for (int i = 0; i < dataGridView1.Rows.Count - 1; i++)
            {
             
                string g_kayit = " INSERT INTO G_IRAN( date,USD,GBP,CHF , SEK , NOK , DKK , INR , AED , KWD, PKR100, JPY100, HKD, OMR, CAD, ZAR , TRY , RUB , QAR , IQD100 , SYP , AUD , SAR, BHD, SGD, LKR10, NPR100 , AMD100 , LYD , CNY , THB100 , MYR , KRW1000 , EUR , KZT100, AFN  , BYN , AZN , TJS ,VEF )" +
                    " VALUES (@date,@USD,@GBP,@CHF ,@SEK ,@NOK ,@DKK ,@INR ,@AED ,@KWD,@PKR100,@JPY100,@HKD,@OMR,@CAD,@ZAR ,@TRY ,@RUB ,@QAR ,@IQD100 ,@SYP ,@AUD ,@SAR,@BHD,@SGD,@LKR10,@NPR100 ,@AMD100 ,@LYD ,@CNY ,@THB100 ,@MYR ,@KRW1000 ,@EUR ,@KZT100,@AFN  ,@BYN ,@AZN ,@TJS ,@VEF )";
                SqlCommand cmd2 = new SqlCommand(g_kayit, baglanti);
             
                cmd2.Parameters.Add(new SqlParameter("@date", (DateTime)dataGridView1.Rows[i].Cells[0].Value));
                cmd2.Parameters.Add(new SqlParameter("@USD", (Double)dataGridView1.Rows[i].Cells[1].Value));
                cmd2.Parameters.Add(new SqlParameter("@GBP", (Double)dataGridView1.Rows[i].Cells[2].Value));
                cmd2.Parameters.Add(new SqlParameter("@CHF ", (Double)dataGridView1.Rows[i].Cells[3].Value));
                cmd2.Parameters.Add(new SqlParameter("@SEK ", (Double)dataGridView1.Rows[i].Cells[4].Value));
                cmd2.Parameters.Add(new SqlParameter("@NOK ", (Double)dataGridView1.Rows[i].Cells[5].Value));
                cmd2.Parameters.Add(new SqlParameter("@DKK ", (Double)dataGridView1.Rows[i].Cells[6].Value));
                cmd2.Parameters.Add(new SqlParameter("@INR ", (Double)dataGridView1.Rows[i].Cells[7].Value));
                cmd2.Parameters.Add(new SqlParameter("@AED ", (Double)dataGridView1.Rows[i].Cells[8].Value));
                cmd2.Parameters.Add(new SqlParameter("@KWD", (Double)dataGridView1.Rows[i].Cells[9].Value));
                cmd2.Parameters.Add(new SqlParameter("@PKR100", (Double)dataGridView1.Rows[i].Cells[10].Value));
                cmd2.Parameters.Add(new SqlParameter("@JPY100", (Double)dataGridView1.Rows[i].Cells[11].Value));
                cmd2.Parameters.Add(new SqlParameter("@HKD", (Double)dataGridView1.Rows[i].Cells[12].Value));
                cmd2.Parameters.Add(new SqlParameter("@OMR", (Double)dataGridView1.Rows[i].Cells[13].Value));
                cmd2.Parameters.Add(new SqlParameter("@CAD", (Double)dataGridView1.Rows[i].Cells[14].Value));
                cmd2.Parameters.Add(new SqlParameter("@ZAR ", (Double)dataGridView1.Rows[i].Cells[15].Value));
                cmd2.Parameters.Add(new SqlParameter("@TRY ", (Double)dataGridView1.Rows[i].Cells[16].Value));
                cmd2.Parameters.Add(new SqlParameter("@RUB ", (Double)dataGridView1.Rows[i].Cells[17].Value));
                cmd2.Parameters.Add(new SqlParameter("@QAR ", (Double)dataGridView1.Rows[i].Cells[18].Value));
                cmd2.Parameters.Add(new SqlParameter("@IQD100 ", (Double)dataGridView1.Rows[i].Cells[19].Value));
                cmd2.Parameters.Add(new SqlParameter("@SYP ", (Double)dataGridView1.Rows[i].Cells[20].Value));
                cmd2.Parameters.Add(new SqlParameter("@AUD ", (Double)dataGridView1.Rows[i].Cells[21].Value));
                cmd2.Parameters.Add(new SqlParameter("@SAR", (Double)dataGridView1.Rows[i].Cells[22].Value));
                cmd2.Parameters.Add(new SqlParameter("@BHD", (Double)dataGridView1.Rows[i].Cells[23].Value));
                cmd2.Parameters.Add(new SqlParameter("@SGD", (Double)dataGridView1.Rows[i].Cells[24].Value));
                cmd2.Parameters.Add(new SqlParameter("@LKR10", (Double)dataGridView1.Rows[i].Cells[25].Value));
                cmd2.Parameters.Add(new SqlParameter("@NPR100 ", (Double)dataGridView1.Rows[i].Cells[26].Value));
                cmd2.Parameters.Add(new SqlParameter("@AMD100 ", (Double)dataGridView1.Rows[i].Cells[27].Value));
                cmd2.Parameters.Add(new SqlParameter("@LYD ", (Double)dataGridView1.Rows[i].Cells[28].Value));
                cmd2.Parameters.Add(new SqlParameter("@CNY ", (Double)dataGridView1.Rows[i].Cells[29].Value));
                cmd2.Parameters.Add(new SqlParameter("@THB100 ", (Double)dataGridView1.Rows[i].Cells[30].Value));
                cmd2.Parameters.Add(new SqlParameter("@MYR ", (Double)dataGridView1.Rows[i].Cells[31].Value));
                cmd2.Parameters.Add(new SqlParameter("@KRW1000 ", (Double)dataGridView1.Rows[i].Cells[32].Value));
                cmd2.Parameters.Add(new SqlParameter("@EUR ", (Double)dataGridView1.Rows[i].Cells[33].Value));
                cmd2.Parameters.Add(new SqlParameter("@KZT100", (Double)dataGridView1.Rows[i].Cells[34].Value));
                cmd2.Parameters.Add(new SqlParameter("@AFN  ", (Double)dataGridView1.Rows[i].Cells[35].Value));
                cmd2.Parameters.Add(new SqlParameter("@BYN ", (Double)dataGridView1.Rows[i].Cells[36].Value));
                cmd2.Parameters.Add(new SqlParameter("@AZN ", (Double)dataGridView1.Rows[i].Cells[37].Value));
                cmd2.Parameters.Add(new SqlParameter("@TJS ", (Double)dataGridView1.Rows[i].Cells[38].Value));
                cmd2.Parameters.Add(new SqlParameter("@VEF ", (Double)dataGridView1.Rows[i].Cells[39].Value));
          
                baglanti.Open();
                cmd2.ExecuteNonQuery();
                baglanti.Close();
            }

            baglanti.Open();
            SqlCommand komut = new SqlCommand("Select * from G_IRAN", baglanti);
            SqlDataReader oku = komut.ExecuteReader();
          
            chart1.ChartAreas[0].AxisX.Title = "Date";
            chart1.ChartAreas[0].AxisY.Title = "Currency";
            chart1.Series["G_IRAN"].LegendText = "Currency/Date";
            chart1.ChartAreas[0].AxisY.Minimum = 35000;
            chart1.ChartAreas[0].AxisY.Maximum = 43000;
            chart1.ChartAreas[0].Position.Width = 100;
            chart1.ChartAreas[0].Position.Height = 100;
         
            chart1.Series["G_IRAN"].ToolTip = "Currency:#VALY\nAverage:#AVG\nMaximum:#MAX\nMinimum:#MIN\n";


            ChartArea CA1 = chart1.ChartAreas[0];
            CA1.AxisX.ScaleView.Zoomable = true;
            CA1.CursorX.AutoScroll = true;
            CA1.CursorX.IsUserSelectionEnabled = true;


            chart1.Series["G_IRAN"].Points.Clear();

            List<string> strList = new List<string>();
            while (oku.Read())
            {
                strList.Add(((DateTime)oku[0]).ToString("d"));
                chart1.Series["G_IRAN"].Points.AddXY(((DateTime)oku[0]).ToString("d"), oku[1]);

            }
            //chart1.ChartAreas["ChartArea1"].AxisX.CustomLabels.Clear();

            for (int i = 0; i < strList.Count; i++)
            {
                //chart1.ChartAreas["ChartArea1"].AxisX.CustomLabels.Add(i + 0.5, i + 1.5, strList[i]);
                //chart1.ChartAreas["ChartArea1"].AxisX.CustomLabels[i].GridTicks = GridTickTypes.TickMark;

            }
            baglanti.Close();
        }
    }
}

